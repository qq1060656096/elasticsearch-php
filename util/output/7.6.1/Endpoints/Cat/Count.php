<?php


namespace Elasticsearch\Endpoints\Cat;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Count
 * Elasticsearch API name cat.count
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Count extends AbstractEndpoint
{

    public function getURI()
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/_cat/count/$index";
        }
        return "/_cat/count";
    }

    public function getParamWhitelist()
    {
        return [
            'format',
            'h',
            'help',
            's',
            'v'
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }
}
