<?php


namespace Elasticsearch\Endpoints\Security;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class PutPrivileges
 * Elasticsearch API name security.put_privileges
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PutPrivileges extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_security/privilege/";
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
}
