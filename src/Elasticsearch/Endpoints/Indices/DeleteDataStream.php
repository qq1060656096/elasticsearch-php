<?php


namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteDataStream
 * Elasticsearch API name indices.delete_data_stream
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteDataStream extends AbstractEndpoint
{
    protected $name;

    public function getURI()
    {
        $name = $this->name ?? null;

        if (isset($name)) {
            return "/_data_stream/$name";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.delete_data_stream');
    }

    public function getParamWhitelist()
    {
        return [
            
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
