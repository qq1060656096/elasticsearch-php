<?php


namespace Elasticsearch\Endpoints\Cat;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class MlDataFrameAnalytics
 * Elasticsearch API name cat.ml_data_frame_analytics
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class MlDataFrameAnalytics extends AbstractEndpoint
{

    public function getURI()
    {
        $id = isset($this->id) ? $this->id : null;

        if (isset($id)) {
            return "/_cat/ml/data_frame/analytics/$id";
        }
        return "/_cat/ml/data_frame/analytics";
    }

    public function getParamWhitelist()
    {
        return [
            'allow_no_match',
            'bytes',
            'format',
            'h',
            'help',
            's',
            'time',
            'v'
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }
}
