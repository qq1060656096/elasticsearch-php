<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteForecast
 * Elasticsearch API name ml.delete_forecast
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteForecast extends AbstractEndpoint
{
    protected $job_id;
    protected $forecast_id;

    public function getURI()
    {
        if (isset($this->job_id) !== true) {
            throw new RuntimeException(
                'job_id is required for delete_forecast'
            );
        }
        $job_id = $this->job_id;
        $forecast_id = $this->forecast_id ?? null;

        if (isset($forecast_id)) {
            return "/_ml/anomaly_detectors/$job_id/_forecast/$forecast_id";
        }
        return "/_ml/anomaly_detectors/$job_id/_forecast";
    }

    public function getParamWhitelist()
    {
        return [
            'allow_no_forecasts',
            'timeout'
        ];
    }

    public function getMethod()
    {
        return 'DELETE';
    }

    public function setJobId($job_id)
    {
        if (isset($job_id) !== true) {
            return $this;
        }
        $this->job_id = $job_id;

        return $this;
    }

    public function setForecastId($forecast_id)
    {
        if (isset($forecast_id) !== true) {
            return $this;
        }
        $this->forecast_id = $forecast_id;

        return $this;
    }
}
