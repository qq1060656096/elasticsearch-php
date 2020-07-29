<?php


namespace Elasticsearch\Endpoints\Transform;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetTransform
 * Elasticsearch API name transform.get_transform
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Transform
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetTransform extends AbstractEndpoint
{
    protected $transform_id;

    public function getURI()
    {
        $transform_id = isset($this->transform_id) ? $this->transform_id : null;

        if (isset($transform_id)) {
            return "/_transform/$transform_id";
        }
        return "/_transform";
    }

    public function getParamWhitelist()
    {
        return [
            'from',
            'size',
            'allow_no_match'
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }

    public function setTransformId($transform_id)
    {
        if (isset($transform_id) !== true) {
            return $this;
        }
        $this->transform_id = $transform_id;

        return $this;
    }
}
