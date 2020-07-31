<?php


namespace Elasticsearch\Endpoints\Cluster;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class State
 * Elasticsearch API name cluster.state
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cluster
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class State extends AbstractEndpoint
{
    protected $metric;

    public function getURI()
    {
        $metric = isset($this->metric) ? $this->metric : null;
        $index = isset($this->index) ? $this->index : null;

        if (isset($metric) && isset($index)) {
            return "/_cluster/state/$metric/$index";
        }
        if (isset($metric)) {
            return "/_cluster/state/$metric";
        }
        return "/_cluster/state";
    }

    public function getParamWhitelist()
    {
        return [
            'local',
            'master_timeout',
            'flat_settings',
            'wait_for_metadata_version',
            'wait_for_timeout',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards'
        ];
    }

    public function getMethod()
    {
        return 'GET';
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
