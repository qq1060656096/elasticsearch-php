<?php


namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class SimulateIndexTemplate
 * Elasticsearch API name indices.simulate_index_template
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class SimulateIndexTemplate extends AbstractEndpoint
{
    protected $name;

    public function getURI()
    {
        $name = $this->name ?? null;

        if (isset($name)) {
            return "/_index_template/_simulate_index/$name";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.simulate_index_template');
    }

    public function getParamWhitelist()
    {
        return [
            'create',
            'cause',
            'master_timeout'
        ];
    }

    public function getMethod()
    {
        return 'POST';
    }

    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setName($name)
    {
        if (isset($name) !== true) {
            return $this;
        }
        $this->name = $name;

        return $this;
    }
}
