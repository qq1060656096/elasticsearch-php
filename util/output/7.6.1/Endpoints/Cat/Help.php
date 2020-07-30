<?php


namespace Elasticsearch\Endpoints\Cat;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Help
 * Elasticsearch API name cat.help
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Help extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_cat";
    }

    public function getParamWhitelist()
    {
        return [
            'help',
            's'
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }
}
