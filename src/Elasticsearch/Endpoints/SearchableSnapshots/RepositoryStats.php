<?php


namespace Elasticsearch\Endpoints\SearchableSnapshots;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class RepositoryStats
 * Elasticsearch API name searchable_snapshots.repository_stats
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\SearchableSnapshots
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class RepositoryStats extends AbstractEndpoint
{
    protected $repository;

    public function getURI()
    {
        $repository = $this->repository ?? null;

        if (isset($repository)) {
            return "/_snapshot/$repository/_stats";
        }
        throw new RuntimeException('Missing parameter for the endpoint searchable_snapshots.repository_stats');
    }

    public function getParamWhitelist()
    {
        return [];
    }

    public function getMethod()
    {
        return 'GET';
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
