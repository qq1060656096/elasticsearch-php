<?php


namespace Elasticsearch\Endpoints\Cluster;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Health
 * Elasticsearch API name cluster.health
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cluster
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Health extends AbstractEndpoint
{

    public function getURI()
    {
        $index = isset($this->index) ? $this->index : null;

        if (isset($index)) {
            return "/_cluster/health/$index";
        }
        return "/_cluster/health";
    }

    public function getParamWhitelist()
    {
        return [
            'expand_wildcards',
            'level',
            'local',
            'master_timeout',
            'timeout',
            'wait_for_active_shards',
            'wait_for_nodes',
            'wait_for_events',
            'wait_for_no_relocating_shards',
            'wait_for_no_initializing_shards',
            'wait_for_status'
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }
}
