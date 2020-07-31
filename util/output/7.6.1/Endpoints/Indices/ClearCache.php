<?php


namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ClearCache
 * Elasticsearch API name indices.clear_cache
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ClearCache extends AbstractEndpoint
{

    public function getURI()
    {
        $index = isset($this->index) ? $this->index : null;

        if (isset($index)) {
            return "/$index/_cache/clear";
        }
        return "/_cache/clear";
    }

    public function getParamWhitelist()
    {
        return [
            'fielddata',
            'fields',
            'query',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'index',
            'request'
        ];
    }

    public function getMethod()
    {
        return 'POST';
    }
}
