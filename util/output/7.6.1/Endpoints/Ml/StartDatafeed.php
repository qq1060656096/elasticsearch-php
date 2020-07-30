<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class StartDatafeed
 * Elasticsearch API name ml.start_datafeed
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class StartDatafeed extends AbstractEndpoint
{
    protected $datafeed_id;

    public function getURI()
    {
        $datafeed_id = $this->datafeed_id ?? null;

        if (isset($datafeed_id)) {
            return "/_ml/datafeeds/$datafeed_id/_start";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.start_datafeed');
    }

    public function getParamWhitelist()
    {
        return [
            'start',
            'end',
            'timeout'
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

    public function setDatafeedId($datafeed_id)
    {
        if (isset($datafeed_id) !== true) {
            return $this;
        }
        $this->datafeed_id = $datafeed_id;

        return $this;
    }
}
