<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetFilters
 * Elasticsearch API name ml.get_filters
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetFilters extends AbstractEndpoint
{
    protected $filter_id;

    public function getURI()
    {
        $filter_id = isset($this->filter_id) ? $this->filter_id : null;

        if (isset($filter_id)) {
            return "/_ml/filters/$filter_id";
        }
        return "/_ml/filters";
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
        return 'GET';
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
