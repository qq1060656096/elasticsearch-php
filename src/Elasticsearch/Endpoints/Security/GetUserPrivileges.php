<?php


namespace Elasticsearch\Endpoints\Security;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetUserPrivileges
 * Elasticsearch API name security.get_user_privileges
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetUserPrivileges extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_security/user/_privileges";
    }

    public function getParamWhitelist()
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
