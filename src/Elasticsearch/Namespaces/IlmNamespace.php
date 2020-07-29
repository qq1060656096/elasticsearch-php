<?php


namespace Elasticsearch\Namespaces;

use Elasticsearch\Namespaces\AbstractNamespace;

/**
 * Class IlmNamespace
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Namespaces
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class IlmNamespace extends AbstractNamespace
{

    /**
     * $params['policy'] = (string) The name of the index lifecycle policy
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/ilm-delete-lifecycle.html
     */
    public function deleteLifecycle(array $params = [])
    {
        $policy = $this->extractArgument($params, 'policy');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Ilm\DeleteLifecycle');
        $endpoint->setParams($params);
        $endpoint->setPolicy($policy);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['index']        = (string) The name of the index to explain
     * $params['only_managed'] = (boolean) filters the indices included in the response to ones managed by ILM
     * $params['only_errors']  = (boolean) filters the indices included in the response to ones in an ILM error state, implies only_managed
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/ilm-explain-lifecycle.html
     */
    public function explainLifecycle(array $params = [])
    {
        $index = $this->extractArgument($params, 'index');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Ilm\ExplainLifecycle');
        $endpoint->setParams($params);
        $endpoint->setIndex($index);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['policy'] = (string) The name of the index lifecycle policy
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/ilm-get-lifecycle.html
     */
    public function getLifecycle(array $params = [])
    {
        $policy = $this->extractArgument($params, 'policy');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Ilm\GetLifecycle');
        $endpoint->setParams($params);
        $endpoint->setPolicy($policy);

        return $this->performRequest($endpoint);
    }
    /**
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/ilm-get-status.html
     */
    public function getStatus(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Ilm\GetStatus');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['index'] = (string) The name of the index whose lifecycle step is to change
     * $params['body']  = (array) The new lifecycle step to move to
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/ilm-move-to-step.html
     */
    public function moveToStep(array $params = [])
    {
        $index = $this->extractArgument($params, 'index');
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Ilm\MoveToStep');
        $endpoint->setParams($params);
        $endpoint->setIndex($index);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['policy'] = (string) The name of the index lifecycle policy
     * $params['body']   = (array) The lifecycle policy definition to register
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/ilm-put-lifecycle.html
     */
    public function putLifecycle(array $params = [])
    {
        $policy = $this->extractArgument($params, 'policy');
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Ilm\PutLifecycle');
        $endpoint->setParams($params);
        $endpoint->setPolicy($policy);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['index'] = (string) The name of the index to remove policy on
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/ilm-remove-policy.html
     */
    public function removePolicy(array $params = [])
    {
        $index = $this->extractArgument($params, 'index');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Ilm\RemovePolicy');
        $endpoint->setParams($params);
        $endpoint->setIndex($index);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['index'] = (string) The name of the indices (comma-separated) whose failed lifecycle step is to be retry
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/ilm-retry-policy.html
     */
    public function retry(array $params = [])
    {
        $index = $this->extractArgument($params, 'index');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Ilm\Retry');
        $endpoint->setParams($params);
        $endpoint->setIndex($index);

        return $this->performRequest($endpoint);
    }
    /**
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/ilm-start.html
     */
    public function start(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Ilm\Start');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/ilm-stop.html
     */
    public function stop(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Ilm\Stop');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
}
