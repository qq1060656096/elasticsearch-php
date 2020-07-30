<?php


namespace Elasticsearch\Endpoints\Security;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Authenticate
 * Elasticsearch API name security.authenticate
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Authenticate extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_security/_authenticate";
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
