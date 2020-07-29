<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteExpiredData
 * Elasticsearch API name ml.delete_expired_data
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteExpiredData extends AbstractEndpoint
{
    protected $job_id;

    public function getURI()
    {
        $job_id = isset($this->job_id) ? $this->job_id : null;

        if (isset($job_id)) {
            return "/_ml/_delete_expired_data/$job_id";
        }
        return "/_ml/_delete_expired_data";
    }

    public function getParamWhitelist()
    {
        return [
            'requests_per_second',
            'timeout'
        ];
    }

    public function getMethod()
    {
        return 'DELETE';
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
