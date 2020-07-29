<?php


namespace Elasticsearch\Endpoints\Rollup;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetRollupCaps
 * Elasticsearch API name rollup.get_rollup_caps
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Rollup
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetRollupCaps extends AbstractEndpoint
{

    public function getURI()
    {
        $id = isset($this->id) ? $this->id : null;

        if (isset($id)) {
            return "/_rollup/data/$id";
        }
        return "/_rollup/data/";
    }

    public function getParamWhitelist()
    {
        return [];
    }

    public function getMethod()
    {
        return 'GET';
    }
}
