<?php


namespace Elasticsearch\Endpoints\Enrich;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ExecutePolicy
 * Elasticsearch API name enrich.execute_policy
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Enrich
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ExecutePolicy extends AbstractEndpoint
{
    protected $name;

    public function getURI()
    {
        $name = isset($this->name) ? $this->name : null;

        if (isset($name)) {
            return "/_enrich/policy/$name/_execute";
        }
        throw new RuntimeException('Missing parameter for the endpoint enrich.execute_policy');
    }

    public function getParamWhitelist()
    {
        return [
            'wait_for_completion'
        ];
    }

    public function getMethod()
    {
        return 'PUT';
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
