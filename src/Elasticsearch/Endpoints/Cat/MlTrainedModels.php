<?php


namespace Elasticsearch\Endpoints\Cat;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class MlTrainedModels
 * Elasticsearch API name cat.ml_trained_models
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class MlTrainedModels extends AbstractEndpoint
{
    protected $model_id;

    public function getURI()
    {
        $model_id = $this->model_id ?? null;

        if (isset($model_id)) {
            return "/_cat/ml/trained_models/$model_id";
        }
        return "/_cat/ml/trained_models";
    }

    public function getParamWhitelist()
    {
        return [
            'allow_no_match',
            'from',
            'size',
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

    public function setModelId($model_id)
    {
        if (isset($model_id) !== true) {
            return $this;
        }
        $this->model_id = $model_id;

        return $this;
    }
}
