<?php


namespace Elasticsearch\Endpoints\Cluster;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class AllocationExplain
 * Elasticsearch API name cluster.allocation_explain
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cluster
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class AllocationExplain extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_cluster/allocation/explain";
    }

    public function getParamWhitelist()
    {
        return [
            'include_yes_decisions',
            'include_disk_info'
        ];
    }

    public function getMethod()
    {
        return isset($this->body) ? 'POST' : 'GET';
    }

    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
