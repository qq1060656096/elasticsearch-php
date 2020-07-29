<?php


namespace Elasticsearch\Endpoints;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class UpdateByQueryRethrottle
 * Elasticsearch API name update_by_query_rethrottle
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class UpdateByQueryRethrottle extends AbstractEndpoint
{
    protected $task_id;

    public function getURI()
    {
        $task_id = isset($this->task_id) ? $this->task_id : null;

        if (isset($task_id)) {
            return "/_update_by_query/$task_id/_rethrottle";
        }
        throw new RuntimeException('Missing parameter for the endpoint update_by_query_rethrottle');
    }

    public function getParamWhitelist()
    {
        return [
            'requests_per_second'
        ];
    }

    public function getMethod()
    {
        return 'POST';
    }

    public function setTaskId($task_id)
    {
        if (isset($task_id) !== true) {
            return $this;
        }
        $this->task_id = $task_id;

        return $this;
    }
}
