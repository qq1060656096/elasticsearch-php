<?php


namespace Elasticsearch\Endpoints\Snapshot;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteRepository
 * Elasticsearch API name snapshot.delete_repository
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Snapshot
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteRepository extends AbstractEndpoint
{
    protected $repository;

    public function getURI()
    {
        $repository = $this->repository ?? null;

        if (isset($repository)) {
            return "/_snapshot/$repository";
        }
        throw new RuntimeException('Missing parameter for the endpoint snapshot.delete_repository');
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
        return 'DELETE';
    }

    public function setRepository($repository)
    {
        if (isset($repository) !== true) {
            return $this;
        }
        if (is_array($repository) === true) {
            $repository = implode(",", $repository);
        }
        $this->repository = $repository;

        return $this;
    }
}
