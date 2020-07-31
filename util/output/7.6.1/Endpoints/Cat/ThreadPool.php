<?php


namespace Elasticsearch\Endpoints\Cat;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ThreadPool
 * Elasticsearch API name cat.thread_pool
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ThreadPool extends AbstractEndpoint
{
    protected $thread_pool_patterns;

    public function getURI()
    {
        $thread_pool_patterns = isset($this->thread_pool_patterns) ? $this->thread_pool_patterns : null;

        if (isset($thread_pool_patterns)) {
            return "/_cat/thread_pool/$thread_pool_patterns";
        }
        return "/_cat/thread_pool";
    }

    public function getParamWhitelist()
    {
        return [
            'format',
            'size',
            'local',
            'master_timeout',
            'h',
            'help',
            's',
            'v'
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }

    public function setThreadPoolPatterns($thread_pool_patterns)
    {
        if (isset($thread_pool_patterns) !== true) {
            return $this;
        }
        if (is_array($thread_pool_patterns) === true) {
            $thread_pool_patterns = implode(",", $thread_pool_patterns);
        }
        $this->thread_pool_patterns = $thread_pool_patterns;

        return $this;
    }
}
