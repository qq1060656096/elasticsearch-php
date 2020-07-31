<?php


namespace Elasticsearch\Endpoints\Security;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DisableUser
 * Elasticsearch API name security.disable_user
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DisableUser extends AbstractEndpoint
{
    protected $username;

    public function getURI()
    {
        $username = isset($this->username) ? $this->username : null;

        if (isset($username)) {
            return "/_security/user/$username/_disable";
        }
        throw new RuntimeException('Missing parameter for the endpoint security.disable_user');
    }

    public function getParamWhitelist()
    {
        return [
            'refresh'
        ];
    }

    public function getMethod()
    {
        return 'PUT';
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
