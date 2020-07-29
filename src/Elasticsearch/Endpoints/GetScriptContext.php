<?php


namespace Elasticsearch\Endpoints;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetScriptContext
 * Elasticsearch API name get_script_context
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetScriptContext extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_script_context";
    }

    public function getParamWhitelist()
    {
        return [
            
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }
}
