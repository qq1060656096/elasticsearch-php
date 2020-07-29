<?php


namespace Elasticsearch\Namespaces;

use Elasticsearch\Namespaces\AbstractNamespace;

/**
 * Class XpackNamespace
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Namespaces
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class XpackNamespace extends AbstractNamespace
{

    /**
     * $params['categories']        = (list) Comma-separated list of info categories. Can be any of: build, license, features
     * $params['accept_enterprise'] = (boolean) If an enterprise license is installed, return the type and mode as 'enterprise' (default: false)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/info-api.html
     */
    public function info(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Xpack\Info');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['master_timeout'] = (time) Specify timeout for watch write operation
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/usage-api.html
     */
    public function usage(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Xpack\Usage');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
}
