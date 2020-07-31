<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetCategories
 * Elasticsearch API name ml.get_categories
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetCategories extends AbstractEndpoint
{
    protected $job_id;
    protected $category_id;

    public function getURI()
    {
        if (isset($this->job_id) !== true) {
            throw new RuntimeException(
                'job_id is required for get_categories'
            );
        }
        $job_id = $this->job_id;
        $category_id = isset($this->category_id) ? $this->category_id : null;

        if (isset($category_id)) {
            return "/_ml/anomaly_detectors/$job_id/results/categories/$category_id";
        }
        return "/_ml/anomaly_detectors/$job_id/results/categories/";
    }

    public function getParamWhitelist()
    {
        return [
            'from',
            'size'
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

    public function setCategoryId($category_id)
    {
        if (isset($category_id) !== true) {
            return $this;
        }
        $this->category_id = $category_id;

        return $this;
    }
}
