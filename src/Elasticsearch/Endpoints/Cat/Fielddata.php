<?php


namespace Elasticsearch\Endpoints\Cat;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Fielddata
 * Elasticsearch API name cat.fielddata
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Fielddata extends AbstractEndpoint
{
    protected $fields;

    public function getURI()
    {
        $fields = isset($this->fields) ? $this->fields : null;

        if (isset($fields)) {
            return "/_cat/fielddata/$fields";
        }
        return "/_cat/fielddata";
    }

    public function getParamWhitelist()
    {
        return [
            'format',
            'bytes',
            'h',
            'help',
            's',
            'v',
            'fields'
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
