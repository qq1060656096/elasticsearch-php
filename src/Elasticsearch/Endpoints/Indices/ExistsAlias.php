<?php


namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ExistsAlias
 * Elasticsearch API name indices.exists_alias
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ExistsAlias extends AbstractEndpoint
{
    protected $name;

    public function getURI()
    {
        if (isset($this->name) !== true) {
            throw new RuntimeException(
                'name is required for exists_alias'
            );
        }
        $name = $this->name;
        $index = isset($this->index) ? $this->index : null;

        if (isset($index)) {
            return "/$index/_alias/$name";
        }
        return "/_alias/$name";
    }

    public function getParamWhitelist()
    {
        return [
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'local'
        ];
    }

    public function getMethod()
    {
        return 'HEAD';
    }

    public function setName($name)
    {
        if (isset($name) !== true) {
            return $this;
        }
        if (is_array($name) === true) {
            $name = implode(",", $name);
        }
        $this->name = $name;

        return $this;
    }
}
