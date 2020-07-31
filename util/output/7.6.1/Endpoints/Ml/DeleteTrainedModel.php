<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteTrainedModel
 * Elasticsearch API name ml.delete_trained_model
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteTrainedModel extends AbstractEndpoint
{
    protected $model_id;

    public function getURI()
    {
        $model_id = isset($this->model_id) ? $this->model_id : null;

        if (isset($model_id)) {
            return "/_ml/inference/$model_id";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.delete_trained_model');
    }

    public function getParamWhitelist()
    {
        return [];
    }

    public function getMethod()
    {
        return 'DELETE';
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
