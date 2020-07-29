<?php


namespace Elasticsearch\Endpoints\DataFrameTransformDeprecated;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteTransform
 * Elasticsearch API name data_frame_transform_deprecated.delete_transform
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\DataFrameTransformDeprecated
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteTransform extends AbstractEndpoint
{
    protected $transform_id;

    public function getURI()
    {
        $transform_id = isset($this->transform_id) ? $this->transform_id : null;

        if (isset($transform_id)) {
            return "/_data_frame/transforms/$transform_id";
        }
        throw new RuntimeException('Missing parameter for the endpoint data_frame_transform_deprecated.delete_transform');
    }

    public function getParamWhitelist()
    {
        return [
            'force'
        ];
    }

    public function getMethod()
    {
        return 'DELETE';
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
