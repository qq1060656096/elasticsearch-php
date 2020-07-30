<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class EvaluateDataFrame
 * Elasticsearch API name ml.evaluate_data_frame
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class EvaluateDataFrame extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_ml/data_frame/_evaluate";
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
