<?php


namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ForceMerge
 * Elasticsearch API name indices.forcemerge
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ForceMerge extends AbstractEndpoint
{

    public function getURI()
    {
        $index = isset($this->index) ? $this->index : null;

        if (isset($index)) {
            return "/$index/_forcemerge";
        }
        return "/_forcemerge";
    }

    public function getParamWhitelist()
    {
        return [
            'flush',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'max_num_segments',
            'only_expunge_deletes'
        ];
    }

    public function getMethod()
    {
        return 'POST';
    }
}
