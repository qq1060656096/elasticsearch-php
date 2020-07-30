<?php


namespace Elasticsearch\Endpoints\Cluster;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Reroute
 * Elasticsearch API name cluster.reroute
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cluster
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Reroute extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_cluster/reroute";
    }

    public function getParamWhitelist()
    {
        return [
            'dry_run',
            'explain',
            'retry_failed',
            'metric',
            'master_timeout',
            'timeout'
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
}
