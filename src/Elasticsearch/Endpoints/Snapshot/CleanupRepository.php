<?php


namespace Elasticsearch\Endpoints\Snapshot;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class CleanupRepository
 * Elasticsearch API name snapshot.cleanup_repository
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Snapshot
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class CleanupRepository extends AbstractEndpoint
{
    protected $repository;

    public function getURI()
    {
        $repository = isset($this->repository) ? $this->repository : null;

        if (isset($repository)) {
            return "/_snapshot/$repository/_cleanup";
        }
        throw new RuntimeException('Missing parameter for the endpoint snapshot.cleanup_repository');
    }

    public function getParamWhitelist()
    {
        return [
            'master_timeout',
            'timeout'
        ];
    }

    public function getMethod()
    {
        return 'POST';
    }

    public function setRepository($repository)
    {
        if (isset($repository) !== true) {
            return $this;
        }
        $this->repository = $repository;

        return $this;
    }
}
