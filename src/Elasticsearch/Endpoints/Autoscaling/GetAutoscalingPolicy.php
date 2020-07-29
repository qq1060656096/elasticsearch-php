<?php


namespace Elasticsearch\Endpoints\Autoscaling;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetAutoscalingPolicy
 * Elasticsearch API name autoscaling.get_autoscaling_policy
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Autoscaling
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetAutoscalingPolicy extends AbstractEndpoint
{
    protected $name;

    public function getURI()
    {
        $name = isset($this->name) ? $this->name : null;

        if (isset($name)) {
            return "/_autoscaling/policy/$name";
        }
        throw new RuntimeException('Missing parameter for the endpoint autoscaling.get_autoscaling_policy');
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
        $this->name = $name;

        return $this;
    }
}
