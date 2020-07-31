<?php


namespace Elasticsearch\Endpoints\Nodes;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class HotThreads
 * Elasticsearch API name nodes.hot_threads
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Nodes
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class HotThreads extends AbstractEndpoint
{
    protected $node_id;

    public function getURI()
    {
        $node_id = isset($this->node_id) ? $this->node_id : null;

        if (isset($node_id)) {
            return "/_nodes/$node_id/hot_threads";
        }
        return "/_nodes/hot_threads";
    }

    public function getParamWhitelist()
    {
        return [
            'interval',
            'snapshots',
            'threads',
            'ignore_idle_threads',
            'type',
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
}
