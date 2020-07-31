<?php


namespace Elasticsearch\Endpoints\Ilm;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetLifecycle
 * Elasticsearch API name ilm.get_lifecycle
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ilm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetLifecycle extends AbstractEndpoint
{
    protected $policy;

    public function getURI()
    {
        $policy = isset($this->policy) ? $this->policy : null;

        if (isset($policy)) {
            return "/_ilm/policy/$policy";
        }
        return "/_ilm/policy";
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

    public function setPolicy($policy)
    {
        if (isset($policy) !== true) {
            return $this;
        }
        $this->policy = $policy;

        return $this;
    }
}
