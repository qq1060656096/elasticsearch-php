<?php


namespace Elasticsearch\Endpoints\Watcher;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeactivateWatch
 * Elasticsearch API name watcher.deactivate_watch
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Watcher
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeactivateWatch extends AbstractEndpoint
{
    protected $watch_id;

    public function getURI()
    {
        $watch_id = $this->watch_id ?? null;

        if (isset($watch_id)) {
            return "/_watcher/watch/$watch_id/_deactivate";
        }
        throw new RuntimeException('Missing parameter for the endpoint watcher.deactivate_watch');
    }

    public function getParamWhitelist()
    {
        return [];
    }

    public function getMethod()
    {
        return 'PUT';
    }

    public function setWatchId($watch_id)
    {
        if (isset($watch_id) !== true) {
            return $this;
        }
        $this->watch_id = $watch_id;

        return $this;
    }
}
