<?php


namespace Elasticsearch\Endpoints\Slm;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteLifecycle
 * Elasticsearch API name slm.delete_lifecycle
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Slm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteLifecycle extends AbstractEndpoint
{
    protected $policy_id;

    public function getURI()
    {
        $policy_id = $this->policy_id ?? null;

        if (isset($policy_id)) {
            return "/_slm/policy/$policy_id";
        }
        throw new RuntimeException('Missing parameter for the endpoint slm.delete_lifecycle');
    }

    public function getParamWhitelist()
    {
        return [
            
        ];
    }

    public function getMethod()
    {
        return 'DELETE';
    }

    public function setPolicyId($policy_id)
    {
        if (isset($policy_id) !== true) {
            return $this;
        }
        $this->policy_id = $policy_id;

        return $this;
    }
}
