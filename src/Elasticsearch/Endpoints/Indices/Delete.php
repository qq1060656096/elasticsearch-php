<?php


namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Delete
 * Elasticsearch API name indices.delete
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Delete extends AbstractEndpoint
{

    public function getURI()
    {
        $index = isset($this->index) ? $this->index : null;

        if (isset($index)) {
            return "/$index";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.delete');
    }

    public function getParamWhitelist()
    {
        return [
            'timeout',
            'master_timeout',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards'
        ];
    }

    public function getMethod()
    {
        return 'DELETE';
    }
}
