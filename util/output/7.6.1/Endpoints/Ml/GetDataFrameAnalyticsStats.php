<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetDataFrameAnalyticsStats
 * Elasticsearch API name ml.get_data_frame_analytics_stats
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetDataFrameAnalyticsStats extends AbstractEndpoint
{

    public function getURI()
    {
        $id = $this->id ?? null;

        if (isset($id)) {
            return "/_ml/data_frame/analytics/$id/_stats";
        }
        return "/_ml/data_frame/analytics/_stats";
    }

    public function getParamWhitelist()
    {
        return [
            'allow_no_match',
            'from',
            'size'
        ];
    }

    public function getMethod()
    {
        return 'GET';
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
