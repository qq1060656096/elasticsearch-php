<?php


namespace Elasticsearch\Endpoints\Snapshot;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Delete
 * Elasticsearch API name snapshot.delete
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Snapshot
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Delete extends AbstractEndpoint
{
    protected $repository;
    protected $snapshot;

    public function getURI()
    {
        $repository = isset($this->repository) ? $this->repository : null;
        $snapshot = isset($this->snapshot) ? $this->snapshot : null;

        if (isset($repository) && isset($snapshot)) {
            return "/_snapshot/$repository/$snapshot";
        }
        throw new RuntimeException('Missing parameter for the endpoint snapshot.delete');
    }

    public function getParamWhitelist()
    {
        return [
            'master_timeout'
        ];
    }

    public function getMethod()
    {
        return 'DELETE';
    }

    public function setRepository($repository)
    {
        if (isset($repository) !== true) {
            return $this;
        }
        $this->repository = $repository;

        return $this;
    }

    public function setSnapshot($snapshot)
    {
        if (isset($snapshot) !== true) {
            return $this;
        }
        $this->snapshot = $snapshot;

        return $this;
    }
}
