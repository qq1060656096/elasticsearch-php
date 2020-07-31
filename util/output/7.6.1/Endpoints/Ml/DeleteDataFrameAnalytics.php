<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteDataFrameAnalytics
 * Elasticsearch API name ml.delete_data_frame_analytics
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteDataFrameAnalytics extends AbstractEndpoint
{

    public function getURI()
    {
        $id = isset($this->id) ? $this->id : null;

        if (isset($id)) {
            return "/_ml/data_frame/analytics/$id";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.delete_data_frame_analytics');
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

    public function setId($id)
    {
        if (isset($id) !== true) {
            return $this;
        }
        $this->id = $id;

        return $this;
    }
}
