<?php


namespace Elasticsearch\Endpoints\Snapshot;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetRepository
 * Elasticsearch API name snapshot.get_repository
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Snapshot
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetRepository extends AbstractEndpoint
{
    protected $repository;

    public function getURI()
    {
        $repository = isset($this->repository) ? $this->repository : null;

        if (isset($repository)) {
            return "/_snapshot/$repository";
        }
        return "/_snapshot";
    }

    public function getParamWhitelist()
    {
        return [
            'master_timeout',
            'local'
        ];
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
        if (is_array($repository) === true) {
            $repository = implode(",", $repository);
        }
        $this->repository = $repository;

        return $this;
    }
}
