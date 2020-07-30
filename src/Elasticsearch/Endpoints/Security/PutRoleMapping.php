<?php


namespace Elasticsearch\Endpoints\Security;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class PutRoleMapping
 * Elasticsearch API name security.put_role_mapping
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PutRoleMapping extends AbstractEndpoint
{
    protected $name;

    public function getURI()
    {
        $name = $this->name ?? null;

        if (isset($name)) {
            return "/_security/role_mapping/$name";
        }
        throw new RuntimeException('Missing parameter for the endpoint security.put_role_mapping');
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

    public function setName($name)
    {
        if (isset($name) !== true) {
            return $this;
        }
        $this->name = $name;

        return $this;
    }
}
