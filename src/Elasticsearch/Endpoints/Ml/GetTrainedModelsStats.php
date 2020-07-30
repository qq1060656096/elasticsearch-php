<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetTrainedModelsStats
 * Elasticsearch API name ml.get_trained_models_stats
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetTrainedModelsStats extends AbstractEndpoint
{
    protected $model_id;

    public function getURI()
    {
        $model_id = $this->model_id ?? null;

        if (isset($model_id)) {
            return "/_ml/inference/$model_id/_stats";
        }
        return "/_ml/inference/_stats";
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

    public function setModelId($model_id)
    {
        if (isset($model_id) !== true) {
            return $this;
        }
        $this->model_id = $model_id;

        return $this;
    }
}
