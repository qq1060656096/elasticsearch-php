<?php


namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetUpgrade
 * Elasticsearch API name indices.get_upgrade
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetUpgrade extends AbstractEndpoint
{

    public function getURI()
    {
        $index = isset($this->index) ? $this->index : null;

        if (isset($index)) {
            return "/$index/_upgrade";
        }
        return "/_upgrade";
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
