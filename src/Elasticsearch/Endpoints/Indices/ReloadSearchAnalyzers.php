<?php


namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ReloadSearchAnalyzers
 * Elasticsearch API name indices.reload_search_analyzers
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ReloadSearchAnalyzers extends AbstractEndpoint
{

    public function getURI()
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_reload_search_analyzers";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.reload_search_analyzers');
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
        return 'GET';
    }
}
