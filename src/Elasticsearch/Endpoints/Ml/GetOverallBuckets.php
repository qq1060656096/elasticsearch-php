<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetOverallBuckets
 * Elasticsearch API name ml.get_overall_buckets
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetOverallBuckets extends AbstractEndpoint
{
    protected $job_id;

    public function getURI()
    {
        $job_id = isset($this->job_id) ? $this->job_id : null;

        if (isset($job_id)) {
            return "/_ml/anomaly_detectors/$job_id/results/overall_buckets";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.get_overall_buckets');
    }

    public function getParamWhitelist()
    {
        return [
            'top_n',
            'bucket_span',
            'overall_score',
            'exclude_interim',
            'start',
            'end',
            'allow_no_jobs'
        ];
    }

    public function getMethod()
    {
        return isset($this->body) ? 'POST' : 'GET';
    }

    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
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
