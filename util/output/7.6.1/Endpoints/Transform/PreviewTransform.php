<?php


namespace Elasticsearch\Endpoints\Transform;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class PreviewTransform
 * Elasticsearch API name transform.preview_transform
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Transform
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PreviewTransform extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_transform/_preview";
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
