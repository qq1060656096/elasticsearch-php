<?php


namespace Elasticsearch\Endpoints\DataFrameTransformDeprecated;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class UpdateTransform
 * Elasticsearch API name data_frame_transform_deprecated.update_transform
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\DataFrameTransformDeprecated
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class UpdateTransform extends AbstractEndpoint
{
    protected $transform_id;

    public function getURI()
    {
        $transform_id = $this->transform_id ?? null;

        if (isset($transform_id)) {
            return "/_data_frame/transforms/$transform_id/_update";
        }
        throw new RuntimeException('Missing parameter for the endpoint data_frame_transform_deprecated.update_transform');
    }

    public function getParamWhitelist()
    {
        return [
            'defer_validation'
        ];
    }

    public function getMethod()
    {
        return 'POST';
    }

    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
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
