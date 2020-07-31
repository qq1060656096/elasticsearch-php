<?php


namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetFieldMapping
 * Elasticsearch API name indices.get_field_mapping
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetFieldMapping extends AbstractEndpoint
{
    protected $fields;

    public function getURI()
    {
        if (isset($this->fields) !== true) {
            throw new RuntimeException(
                'fields is required for get_field_mapping'
            );
        }
        $fields = $this->fields;
        $index = isset($this->index) ? $this->index : null;
        $type = isset($this->type) ? $this->type : null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($index) && isset($type)) {
            return "/$index/_mapping/$type/field/$fields";
        }
        if (isset($index)) {
            return "/$index/_mapping/field/$fields";
        }
        if (isset($type)) {
            return "/_mapping/$type/field/$fields";
        }
        return "/_mapping/field/$fields";
    }

    public function getParamWhitelist()
    {
        return [
            'include_type_name',
            'include_defaults',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'local'
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }

    public function setFields($fields)
    {
        if (isset($fields) !== true) {
            return $this;
        }
        if (is_array($fields) === true) {
            $fields = implode(",", $fields);
        }
        $this->fields = $fields;

        return $this;
    }
}
