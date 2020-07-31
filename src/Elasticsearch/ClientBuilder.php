<?php



namespace Elasticsearch;

use Elasticsearch\Common\Exceptions\InvalidArgumentException;
use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Common\Exceptions\ElasticCloudIdParseException;
use Elasticsearch\Common\Exceptions\AuthenticationConfigException;
use Elasticsearch\ConnectionPool\AbstractConnectionPool;
use Elasticsearch\ConnectionPool\Selectors\RoundRobinSelector;
use Elasticsearch\ConnectionPool\Selectors\SelectorInterface;
use Elasticsearch\ConnectionPool\StaticNoPingConnectionPool;
use Elasticsearch\Connections\Connection;
use Elasticsearch\Connections\ConnectionFactory;
use Elasticsearch\Connections\ConnectionFactoryInterface;
use Elasticsearch\Namespaces\NamespaceBuilderInterface;
use Elasticsearch\Serializers\SerializerInterface;
use Elasticsearch\ConnectionPool\Selectors;
use Elasticsearch\Serializers\SmartSerializer;
use GuzzleHttp\Ring\Client\CurlHandler;
use GuzzleHttp\Ring\Client\CurlMultiHandler;
use GuzzleHttp\Ring\Client\Middleware;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * Class ClientBuilder
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Common\Exceptions
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ClientBuilder
{
    /**
     * @var Transport
     */
    private $transport;

    /**
     * @var callable
     */
    private $endpoint;

    /**
     * @var NamespaceBuilderInterface[]
     */
    private $registeredNamespacesBuilders = [];

    /**
     * @var ConnectionFactoryInterface
     */
    private $connectionFactory;

    /**
     * @var callable
     */
    private $handler;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var LoggerInterface
     */
    private $tracer;

    /**
     * @var string
     */
    private $connectionPool = StaticNoPingConnectionPool::class;

    /**
     * @var string
     */
    private $serializer = SmartSerializer::class;

    /**
     * @var string
     */
    private $selector = RoundRobinSelector::class;

    /**
     * @var array
     */
    private $connectionPoolArgs = [
        'randomizeHosts' => true
    ];

    /**
     * @var array
     */
    private $hosts;

    /**
     * @var array
     */
    private $connectionParams;

    /**
     * @var int
     */
    private $retries;

    /**
     * @var bool
     */
    private $sniffOnStart = false;

    /**
     * @var null|array
     */
    private $sslCert = null;

    /**
     * @var null|array
     */
    private $sslKey = null;

    /**
     * @var null|bool|string
     */
    private $sslVerification = null;

    /**
     *  @var bool
     */
    private $includePortInHostHeader = false;

    public static function create()
    {
        return new static();
    }

    /**
     * Can supply first parm to Client::__construct() when invoking manually or with dependency injection
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Can supply second parm to Client::__construct() when invoking manually or with dependency injection
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Can supply third parm to Client::__construct() when invoking manually or with dependency injection
     *
     * @return NamespaceBuilderInterface[]
     */
    public function getRegisteredNamespacesBuilders()
    {
        return $this->registeredNamespacesBuilders;
    }

    /**
     * Build a new client from the provided config.  Hash keys
     * should correspond to the method name e.g. ['connectionPool']
     * corresponds to setConnectionPool().
     *
     * Missing keys will use the default for that setting if applicable
     *
     * Unknown keys will throw an exception by default, but this can be silenced
     * by setting `quiet` to true
     *
     * @param  $quiet False if unknown settings throw exception, true to silently
     *                     ignore unknown settings
     * @throws Common\Exceptions\RuntimeException
     */
    public static function fromConfig(array $config, $quiet = false)
    {
        $builder = new self;
        foreach ($config as $key => $value) {
            $method = "set$key";
            if (method_exists($builder, $method)) {
                $builder->$method($value);
                unset($config[$key]);
            }
        }

        if ($quiet === false && count($config) > 0) {
            $unknown = implode(array_keys($config));
            throw new RuntimeException("Unknown parameters provided: $unknown");
        }
        return $builder->build();
    }

    /**
     * @throws \RuntimeException
     */
    public static function defaultHandler(array $multiParams = [], array $singleParams = [])
    {
        $future = null;
        if (extension_loaded('curl')) {
            $config = array_merge([ 'mh' => curl_multi_init() ], $multiParams);
            if (function_exists('curl_reset')) {
                $default = new CurlHandler($singleParams);
                $future = new CurlMultiHandler($config);
            } else {
                $default = new CurlMultiHandler($config);
            }
        } else {
            throw new \RuntimeException('Elasticsearch-PHP requires cURL, or a custom HTTP handler.');
        }

        return $future ? Middleware::wrapFuture($default, $future) : $default;
    }

    /**
     * @throws \RuntimeException
     */
    public static function multiHandler(array $params = [])
    {
        if (function_exists('curl_multi_init')) {
            return new CurlMultiHandler(array_merge([ 'mh' => curl_multi_init() ], $params));
        } else {
            throw new \RuntimeException('CurlMulti handler requires cURL.');
        }
    }

    /**
     * @throws \RuntimeException
     */
    public static function singleHandler()
    {
        if (function_exists('curl_reset')) {
            return new CurlHandler();
        } else {
            throw new \RuntimeException('CurlSingle handler requires cURL.');
        }
    }

    public function setConnectionFactory(ConnectionFactoryInterface $connectionFactory)
    {
        $this->connectionFactory = $connectionFactory;

        return $this;
    }

    /**
     * @param  AbstractConnectionPool|$connectionPool
     * @throws \InvalidArgumentException
     */
    public function setConnectionPool($connectionPool, array $args = [])
    {
        if (is_string($connectionPool)) {
            $this->connectionPool = $connectionPool;
            $this->connectionPoolArgs = $args;
        } elseif (is_object($connectionPool)) {
            $this->connectionPool = $connectionPool;
        } else {
            throw new InvalidArgumentException("Serializer must be a class path or instantiated object extending AbstractConnectionPool");
        }

        return $this;
    }

    public function setEndpoint(callable $endpoint)
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    public function registerNamespace(NamespaceBuilderInterface $namespaceBuilder)
    {
        $this->registeredNamespacesBuilders[] = $namespaceBuilder;

        return $this;
    }

    public function setTransport(Transport $transport)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * @param  mixed $handler
     * @return $this
     */
    public function setHandler($handler)
    {
        $this->handler = $handler;

        return $this;
    }

    public function setLogger(LoggerInterface $logger)
    {
        if (!$logger instanceof LoggerInterface) {
            throw new InvalidArgumentException('$logger must implement \Psr\Log\LoggerInterface!');
        }

        $this->logger = $logger;

        return $this;
    }

    public function setTracer(LoggerInterface $tracer)
    {
        if (!$tracer instanceof LoggerInterface) {
            throw new InvalidArgumentException('$tracer must implement \Psr\Log\LoggerInterface!');
        }

        $this->tracer = $tracer;

        return $this;
    }

    /**
     * @param \Elasticsearch\Serializers\SerializerInterface|$serializer
     */
    public function setSerializer($serializer)
    {
        $this->parseStringOrObject($serializer, $this->serializer, 'SerializerInterface');

        return $this;
    }

    public function setHosts(array $hosts)
    {
        $this->hosts = $hosts;

        return $this;
    }

    /**
     * Set the APIKey Pair, consiting of the API Id and the ApiKey of the Response from /_security/api_key
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/security-api-create-api-key.html
     *
     * @throws AuthenticationConfigException
     */
    public function setApiKey($id, $apiKey)
    {
        if (isset($this->connectionParams['client']['curl'][CURLOPT_HTTPAUTH]) === true) {
            throw new AuthenticationConfigException("You can't use APIKey - and Basic Authenication together.");
        }

        $this->connectionParams['client']['headers']['Authorization'] = [
            'ApiKey ' . base64_encode($id . ':' . $apiKey)
        ];

        return $this;
    }

    /**
     * Set the APIKey Pair, consiting of the API Id and the ApiKey of the Response from /_security/api_key
     *
     * @param $username
     * @param $password
     *
     * @throws AuthenticationConfigException
     */
    public function setBasicAuthentication($username, $password)
    {
        if (isset($this->connectionParams['client']['headers']['Authorization']) === true) {
            throw new AuthenticationConfigException("You can't use APIKey - and Basic Authenication together.");
        }

        if (isset($this->connectionParams['client']['curl']) === false) {
            $this->connectionParams['client']['curl'] = [];
        }

        $this->connectionParams['client']['curl'] += [
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_USERPWD  => $username.':'.$password
        ];

        return $this;
    }

    /**
     * Set Elastic Cloud ID to connect to Elastic Cloud
     *
     * @link  https://elastic.co/cloud
     *
     * @param $cloudId
     */
    public function setElasticCloudId($cloudId)
    {
        // Register the Hosts array
        $this->setHosts([
            [
                'host'   => $this->parseElasticCloudId($cloudId),
                'port'   => '',
                'scheme' => 'https',
            ]
        ]);

        if (!isset($this->connectionParams['client']['curl'][CURLOPT_ENCODING])) {
            // Merge best practices for the connection (enable gzip)
            $this->connectionParams['client']['curl'][CURLOPT_ENCODING] = 'gzip';
        }

        return $this;
    }

    public function setConnectionParams(array $params)
    {
        $this->connectionParams = $params;

        return $this;
    }

    public function setRetries($retries)
    {
        $this->retries = $retries;

        return $this;
    }

    /**
     * @param \Elasticsearch\ConnectionPool\Selectors\SelectorInterface|$selector
     */
    public function setSelector($selector)
    {
        $this->parseStringOrObject($selector, $this->selector, 'SelectorInterface');

        return $this;
    }

    public function setSniffOnStart($sniffOnStart)
    {
        $this->sniffOnStart = $sniffOnStart;

        return $this;
    }

    /**
     * @param $cert The name of a file containing a PEM formatted certificate.
     */
    public function setSSLCert($cert, $password = null)
    {
        $this->sslCert = [$cert, $password];

        return $this;
    }

    /**
     * @param $key The name of a file containing a private SSL key.
     */
    public function setSSLKey($key, $password = null)
    {
        $this->sslKey = [$key, $password];

        return $this;
    }

    /**
     *  @param bool|$value
     */
    public function setSSLVerification($value = true)
    {
        $this->sslVerification = $value;

        return $this;
    }

    /**
     * Include the port in Host header
     * @see https://github.com/elastic/elasticsearch-php/issues/993
     */
    public function includePortInHostHeader($enable)
    {
        $this->includePortInHostHeader = $enable;

        return $this;
    }

    public function build()
    {
        $this->buildLoggers();

        if (is_null($this->handler)) {
            $this->handler = ClientBuilder::defaultHandler();
        }

        $sslOptions = null;
        if (isset($this->sslKey)) {
            $sslOptions['ssl_key'] = $this->sslKey;
        }
        if (isset($this->sslCert)) {
            $sslOptions['cert'] = $this->sslCert;
        }
        if (isset($this->sslVerification)) {
            $sslOptions['verify'] = $this->sslVerification;
        }

        if (!is_null($sslOptions)) {
            $sslHandler = function (callable $handler, array $sslOptions) {
                return function (array $request) use ($handler, $sslOptions) {
                    // Add our custom headers
                    foreach ($sslOptions as $key => $value) {
                        $request['client'][$key] = $value;
                    }

                    // Send the request using the handler and return the response.
                    return $handler($request);
                };
            };
            $this->handler = $sslHandler($this->handler, $sslOptions);
        }

        if (is_null($this->serializer)) {
            $this->serializer = new SmartSerializer();
        } elseif (is_string($this->serializer)) {
            $this->serializer = new $this->serializer;
        }

        $this->connectionParams['client']['port_in_header'] = $this->includePortInHostHeader;

        if (is_null($this->connectionFactory)) {
            if (is_null($this->connectionParams)) {
                $this->connectionParams = [];
            }

            // Make sure we are setting Content-Type and Accept (unless the user has explicitly
            // overridden it
            if (! isset($this->connectionParams['client']['headers'])) {
                $this->connectionParams['client']['headers'] = [];
            }
            if (! isset($this->connectionParams['client']['headers']['Content-Type'])) {
                $this->connectionParams['client']['headers']['Content-Type'] = ['application/json'];
            }
            if (! isset($this->connectionParams['client']['headers']['Accept'])) {
                $this->connectionParams['client']['headers']['Accept'] = ['application/json'];
            }

            $this->connectionFactory = new ConnectionFactory($this->handler, $this->connectionParams, $this->serializer, $this->logger, $this->tracer);
        }

        if (is_null($this->hosts)) {
            $this->hosts = $this->getDefaultHost();
        }

        if (is_null($this->selector)) {
            $this->selector = new RoundRobinSelector();
        } elseif (is_string($this->selector)) {
            $this->selector = new $this->selector;
        }

        $this->buildTransport();

        if (is_null($this->endpoint)) {
            $serializer = $this->serializer;

            $this->endpoint = function ($class) use ($serializer) {
                $fullPath = '\\Elasticsearch\\Endpoints\\' . $class;
                if ($class === 'Bulk' || $class === 'Msearch' || $class === 'MsearchTemplate' || $class === 'MPercolate') {
                    return new $fullPath($serializer);
                } else {
                    return new $fullPath();
                }
            };
        }

        $registeredNamespaces = [];
        foreach ($this->registeredNamespacesBuilders as $builder) {
            /**
 * @var NamespaceBuilderInterface $builder
*/
            $registeredNamespaces[$builder->getName()] = $builder->getObject($this->transport, $this->serializer);
        }

        return $this->instantiate($this->transport, $this->endpoint, $registeredNamespaces);
    }

    protected function instantiate(Transport $transport, callable $endpoint, array $registeredNamespaces)
    {
        return new Client($transport, $endpoint, $registeredNamespaces);
    }

    private function buildLoggers()
    {
        if (is_null($this->logger)) {
            $this->logger = new NullLogger();
        }

        if (is_null($this->tracer)) {
            $this->tracer = new NullLogger();
        }
    }

    private function buildTransport()
    {
        $connections = $this->buildConnectionsFromHosts($this->hosts);

        if (is_string($this->connectionPool)) {
            $this->connectionPool = new $this->connectionPool(
                $connections,
                $this->selector,
                $this->connectionFactory,
                $this->connectionPoolArgs
            );
        } elseif (is_null($this->connectionPool)) {
            $this->connectionPool = new StaticNoPingConnectionPool(
                $connections,
                $this->selector,
                $this->connectionFactory,
                $this->connectionPoolArgs
            );
        }

        if (is_null($this->retries)) {
            $this->retries = count($connections);
        }

        if (is_null($this->transport)) {
            $this->transport = new Transport($this->retries, $this->connectionPool, $this->logger, $this->sniffOnStart);
        }
    }

    private function parseStringOrObject($arg, &$destination, $interface)
    {
        if (is_string($arg)) {
            $destination = new $arg;
        } elseif (is_object($arg)) {
            $destination = $arg;
        } else {
            throw new InvalidArgumentException("Serializer must be a class path or instantiated object implementing $interface");
        }
    }

    private function getDefaultHost()
    {
        return ['localhost:9200'];
    }

    /**
     * @return \Elasticsearch\Connections\Connection[]
     * @throws RuntimeException
     */
    private function buildConnectionsFromHosts(array $hosts)
    {
        $connections = [];
        foreach ($hosts as $host) {
            if (is_string($host)) {
                $host = $this->prependMissingScheme($host);
                $host = $this->extractURIParts($host);
            } elseif (is_array($host)) {
                $host = $this->normalizeExtendedHost($host);
            } else {
                $this->logger->error("Could not parse host: ".print_r($host, true));
                throw new RuntimeException("Could not parse host: ".print_r($host, true));
            }

            $connections[] = $this->connectionFactory->create($host);
        }

        return $connections;
    }

    /**
     * @throws RuntimeException
     */
    private function normalizeExtendedHost(array $host)
    {
        if (isset($host['host']) === false) {
            $this->logger->error("Required 'host' was not defined in extended format: ".print_r($host, true));
            throw new RuntimeException("Required 'host' was not defined in extended format: ".print_r($host, true));
        }

        if (isset($host['scheme']) === false) {
            $host['scheme'] = 'http';
        }
        if (isset($host['port']) === false) {
            $host['port'] = 9200;
        }
        return $host;
    }

    /**
     * @throws InvalidArgumentException
     */
    private function extractURIParts($host)
    {
        $parts = parse_url($host);

        if ($parts === false) {
            throw new InvalidArgumentException(sprintf('Could not parse URI: "%s"', $host));
        }

        if (isset($parts['port']) !== true) {
            $parts['port'] = 9200;
        }

        return $parts;
    }

    private function prependMissingScheme($host)
    {
        if (!preg_match("/^https?:\/\//", $host)) {
            $host = 'http://' . $host;
        }

        return $host;
    }

    /**
     * Parse the Elastic Cloud Params from the CloudId
     *
     * @param $cloudId
     *
     * @return string
     *
     * @throws ElasticCloudIdParseException
     */
    private function parseElasticCloudId($cloudId)
    {
        try {
            list($name, $encoded) = explode(':', $cloudId);
            list($uri, $uuids)    = explode('$', base64_decode($encoded));
            list($es,)            = explode(':', $uuids);

            return $es . '.' . $uri;
        } catch (\Throwable $t) {
            throw new ElasticCloudIdParseException('could not parse the Cloud ID:' . $cloudId);
        }
    }
}
