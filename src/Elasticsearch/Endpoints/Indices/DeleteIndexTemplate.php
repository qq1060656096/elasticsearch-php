<?php


namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteIndexTemplate
 * Elasticsearch API name indices.delete_index_template
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteIndexTemplate extends AbstractEndpoint
{
    protected $name;

    public function getURI()
    {
        $name = isset($this->name) ? $this->name : null;

        if (isset($name)) {
            return "/_index_template/$name";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.delete_index_template');
    }

    public function getParamWhitelist()
    {
        return [
            'timeout',
            'master_timeout'
        ];
    }

    public function getMethod()
    {
        return 'DELETE';
    }

    public function setName($name)
    {
        if (isset($name) !== true) {
            return $this;
        }
        $this->name = $name;

        return $this;
    }
}
