<?php


namespace Elasticsearch\Endpoints\Ilm;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class PutLifecycle
 * Elasticsearch API name ilm.put_lifecycle
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ilm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PutLifecycle extends AbstractEndpoint
{
    protected $policy;

    public function getURI()
    {
        $policy = $this->policy ?? null;

        if (isset($policy)) {
            return "/_ilm/policy/$policy";
        }
        throw new RuntimeException('Missing parameter for the endpoint ilm.put_lifecycle');
    }

    public function getParamWhitelist()
    {
        return [
            
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

    public function setPolicy($policy)
    {
        if (isset($policy) !== true) {
            return $this;
        }
        $this->policy = $policy;

        return $this;
    }
}
