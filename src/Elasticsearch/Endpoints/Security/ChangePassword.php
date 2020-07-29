<?php


namespace Elasticsearch\Endpoints\Security;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ChangePassword
 * Elasticsearch API name security.change_password
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ChangePassword extends AbstractEndpoint
{
    protected $username;

    public function getURI()
    {
        $username = isset($this->username) ? $this->username : null;

        if (isset($username)) {
            return "/_security/user/$username/_password";
        }
        return "/_security/user/_password";
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

    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
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
