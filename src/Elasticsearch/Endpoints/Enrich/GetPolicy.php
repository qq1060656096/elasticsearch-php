<?php


namespace Elasticsearch\Endpoints\Enrich;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetPolicy
 * Elasticsearch API name enrich.get_policy
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Enrich
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetPolicy extends AbstractEndpoint
{
    protected $name;

    public function getURI()
    {
        $name = isset($this->name) ? $this->name : null;

        if (isset($name)) {
            return "/_enrich/policy/$name";
        }
        return "/_enrich/policy/";
    }

    public function getParamWhitelist()
    {
        return [];
    }

    public function getMethod()
    {
        return 'GET';
    }

    public function setName($name)
    {
        if (isset($name) !== true) {
            return $this;
        }
        if (is_array($name) === true) {
            $name = implode(",", $name);
        }
        $this->name = $name;

        return $this;
    }
}
