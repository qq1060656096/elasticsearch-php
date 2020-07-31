<?php


namespace Elasticsearch\Endpoints\Watcher;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Stats
 * Elasticsearch API name watcher.stats
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Watcher
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Stats extends AbstractEndpoint
{
    protected $metric;

    public function getURI()
    {
        $metric = isset($this->metric) ? $this->metric : null;

        if (isset($metric)) {
            return "/_watcher/stats/$metric";
        }
        return "/_watcher/stats";
    }

    public function getParamWhitelist()
    {
        return [
            'metric',
            'emit_stacktraces'
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
