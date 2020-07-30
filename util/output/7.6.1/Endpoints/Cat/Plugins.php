<?php


namespace Elasticsearch\Endpoints\Cat;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Plugins
 * Elasticsearch API name cat.plugins
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Plugins extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_cat/plugins";
    }

    public function getParamWhitelist()
    {
        return [
            'format',
            'local',
            'master_timeout',
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
