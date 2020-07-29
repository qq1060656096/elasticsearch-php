<?php


namespace Elasticsearch\Endpoints;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ScriptsPainlessExecute
 * Elasticsearch API name scripts_painless_execute
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ScriptsPainlessExecute extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_scripts/painless/_execute";
    }

    public function getParamWhitelist()
    {
        return [
            
        ];
    }

    public function getMethod()
    {
        return isset($this->body) ? 'POST' : 'GET';
    }

    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
