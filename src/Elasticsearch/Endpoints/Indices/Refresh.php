<?php


namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Refresh
 * Elasticsearch API name indices.refresh
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Refresh extends AbstractEndpoint
{

    public function getURI()
    {
        $index = isset($this->index) ? $this->index : null;

        if (isset($index)) {
            return "/$index/_refresh";
        }
        return "/_refresh";
    }

    public function getParamWhitelist()
    {
        return [
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards'
        ];
    }

    public function getMethod()
    {
        return 'POST';
    }
}
