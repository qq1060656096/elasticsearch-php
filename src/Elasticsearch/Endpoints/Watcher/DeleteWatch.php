<?php


namespace Elasticsearch\Endpoints\Watcher;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteWatch
 * Elasticsearch API name watcher.delete_watch
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Watcher
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteWatch extends AbstractEndpoint
{

    public function getURI()
    {
        $id = $this->id ?? null;

        if (isset($id)) {
            return "/_watcher/watch/$id";
        }
        throw new RuntimeException('Missing parameter for the endpoint watcher.delete_watch');
    }

    public function getParamWhitelist()
    {
        return [];
    }

    public function getMethod()
    {
        return 'DELETE';
    }
}
