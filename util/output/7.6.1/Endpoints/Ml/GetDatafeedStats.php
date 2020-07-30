<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetDatafeedStats
 * Elasticsearch API name ml.get_datafeed_stats
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetDatafeedStats extends AbstractEndpoint
{
    protected $datafeed_id;

    public function getURI()
    {
        $datafeed_id = $this->datafeed_id ?? null;

        if (isset($datafeed_id)) {
            return "/_ml/datafeeds/$datafeed_id/_stats";
        }
        return "/_ml/datafeeds/_stats";
    }

    public function getParamWhitelist()
    {
        return [
            'allow_no_datafeeds'
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }

    public function setDatafeedId($datafeed_id)
    {
        if (isset($datafeed_id) !== true) {
            return $this;
        }
        $this->datafeed_id = $datafeed_id;

        return $this;
    }
}
