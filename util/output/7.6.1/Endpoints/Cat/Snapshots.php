<?php


namespace Elasticsearch\Endpoints\Cat;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Snapshots
 * Elasticsearch API name cat.snapshots
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Snapshots extends AbstractEndpoint
{
    protected $repository;

    public function getURI()
    {
        $repository = $this->repository ?? null;

        if (isset($repository)) {
            return "/_cat/snapshots/$repository";
        }
        return "/_cat/snapshots";
    }

    public function getParamWhitelist()
    {
        return [
            'format',
            'ignore_unavailable',
            'master_timeout',
            'h',
            'help',
            's',
            'time',
            'v'
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
