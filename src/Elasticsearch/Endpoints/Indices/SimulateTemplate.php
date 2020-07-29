<?php


namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class SimulateTemplate
 * Elasticsearch API name indices.simulate_template
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class SimulateTemplate extends AbstractEndpoint
{
    protected $name;

    public function getURI()
    {
        $name = isset($this->name) ? $this->name : null;

        if (isset($name)) {
            return "/_index_template/_simulate/$name";
        }
        return "/_index_template/_simulate";
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
