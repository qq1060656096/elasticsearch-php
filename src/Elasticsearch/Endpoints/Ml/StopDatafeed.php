<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class StopDatafeed
 * Elasticsearch API name ml.stop_datafeed
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class StopDatafeed extends AbstractEndpoint
{
    protected $datafeed_id;

    public function getURI()
    {
        $datafeed_id = isset($this->datafeed_id) ? $this->datafeed_id : null;

        if (isset($datafeed_id)) {
            return "/_ml/datafeeds/$datafeed_id/_stop";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.stop_datafeed');
    }

    public function getParamWhitelist()
    {
        return [
            'allow_no_datafeeds',
            'force',
            'timeout'
        ];
    }

    public function getMethod()
    {
        return 'POST';
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
