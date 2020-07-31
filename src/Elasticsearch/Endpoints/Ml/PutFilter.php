<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class PutFilter
 * Elasticsearch API name ml.put_filter
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PutFilter extends AbstractEndpoint
{
    protected $filter_id;

    public function getURI()
    {
        $filter_id = isset($this->filter_id) ? $this->filter_id : null;

        if (isset($filter_id)) {
            return "/_ml/filters/$filter_id";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.put_filter');
    }

    public function getParamWhitelist()
    {
        return [];
    }

    public function getMethod()
    {
        return 'PUT';
    }

    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setFilterId($filter_id)
    {
        if (isset($filter_id) !== true) {
            return $this;
        }
        $this->filter_id = $filter_id;

        return $this;
    }
}
