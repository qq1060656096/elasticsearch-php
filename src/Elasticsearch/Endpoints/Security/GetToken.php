<?php


namespace Elasticsearch\Endpoints\Security;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetToken
 * Elasticsearch API name security.get_token
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetToken extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_security/oauth2/token";
    }

    public function getParamWhitelist()
    {
        return [
            
        ];
    }

    public function getMethod()
    {
        return 'POST';
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
