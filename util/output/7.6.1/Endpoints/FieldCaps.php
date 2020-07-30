<?php


namespace Elasticsearch\Endpoints;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class FieldCaps
 * Elasticsearch API name field_caps
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class FieldCaps extends AbstractEndpoint
{

    public function getURI()
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_field_caps";
        }
        return "/_field_caps";
    }

    public function getParamWhitelist()
    {
        return [
            'fields',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'include_unmapped'
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }
}
