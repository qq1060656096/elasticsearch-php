<?php


namespace Elasticsearch\Endpoints\Nodes;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Usage
 * Elasticsearch API name nodes.usage
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Nodes
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Usage extends AbstractEndpoint
{
    protected $node_id;
    protected $metric;

    public function getURI()
    {
        $node_id = isset($this->node_id) ? $this->node_id : null;
        $metric = isset($this->metric) ? $this->metric : null;

        if (isset($node_id) && isset($metric)) {
            return "/_nodes/$node_id/usage/$metric";
        }
        if (isset($node_id)) {
            return "/_nodes/$node_id/usage";
        }
        if (isset($metric)) {
            return "/_nodes/usage/$metric";
        }
        return "/_nodes/usage";
    }

    public function getParamWhitelist()
    {
        return [
            'timeout'
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }

    public function setNodeId($node_id)
    {
        if (isset($node_id) !== true) {
            return $this;
        }
        if (is_array($node_id) === true) {
            $node_id = implode(",", $node_id);
        }
        $this->node_id = $node_id;

        return $this;
    }

    public function setMetric($metric)
    {
        if (isset($metric) !== true) {
            return $this;
        }
        if (is_array($metric) === true) {
            $metric = implode(",", $metric);
        }
        $this->metric = $metric;

        return $this;
    }
}
