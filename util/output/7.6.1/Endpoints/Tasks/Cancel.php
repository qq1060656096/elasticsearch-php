<?php


namespace Elasticsearch\Endpoints\Tasks;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Cancel
 * Elasticsearch API name tasks.cancel
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Tasks
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Cancel extends AbstractEndpoint
{
    protected $task_id;

    public function getURI()
    {
        $task_id = isset($this->task_id) ? $this->task_id : null;

        if (isset($task_id)) {
            return "/_tasks/$task_id/_cancel";
        }
        return "/_tasks/_cancel";
    }

    public function getParamWhitelist()
    {
        return [
            'nodes',
            'actions',
            'parent_task_id'
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
