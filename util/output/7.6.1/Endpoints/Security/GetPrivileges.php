<?php


namespace Elasticsearch\Endpoints\Security;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetPrivileges
 * Elasticsearch API name security.get_privileges
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetPrivileges extends AbstractEndpoint
{
    protected $application;
    protected $name;

    public function getURI()
    {
        $application = isset($this->application) ? $this->application : null;
        $name = isset($this->name) ? $this->name : null;

        if (isset($application) && isset($name)) {
            return "/_security/privilege/$application/$name";
        }
        if (isset($application)) {
            return "/_security/privilege/$application";
        }
        return "/_security/privilege";
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

    public function setApplication($application)
    {
        if (isset($application) !== true) {
            return $this;
        }
        $this->application = $application;

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
