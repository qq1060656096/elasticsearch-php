<?php


namespace Elasticsearch\Endpoints\Security;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteUser
 * Elasticsearch API name security.delete_user
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteUser extends AbstractEndpoint
{
    protected $username;

    public function getURI()
    {
        $username = $this->username ?? null;

        if (isset($username)) {
            return "/_security/user/$username";
        }
        throw new RuntimeException('Missing parameter for the endpoint security.delete_user');
    }

    public function getParamWhitelist()
    {
        return [
            'refresh'
        ];
    }

    public function getMethod()
    {
        return 'DELETE';
    }

    public function setUsername($username)
    {
        if (isset($username) !== true) {
            return $this;
        }
        $this->username = $username;

        return $this;
    }
}
