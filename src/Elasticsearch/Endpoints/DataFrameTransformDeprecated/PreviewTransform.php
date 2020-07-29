<?php


namespace Elasticsearch\Endpoints\DataFrameTransformDeprecated;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class PreviewTransform
 * Elasticsearch API name data_frame_transform_deprecated.preview_transform
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\DataFrameTransformDeprecated
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PreviewTransform extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_data_frame/transforms/_preview";
    }

    public function getParamWhitelist()
    {
        return [];
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
}
