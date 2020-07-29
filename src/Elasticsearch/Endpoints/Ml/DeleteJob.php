<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteJob
 * Elasticsearch API name ml.delete_job
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteJob extends AbstractEndpoint
{
    protected $job_id;

    public function getURI()
    {
        $job_id = isset($this->job_id) ? $this->job_id : null;

        if (isset($job_id)) {
            return "/_ml/anomaly_detectors/$job_id";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.delete_job');
    }

    public function getParamWhitelist()
    {
        return [
            'force',
            'wait_for_completion'
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
}
