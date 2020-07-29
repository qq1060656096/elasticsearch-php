<?php


namespace Elasticsearch\Endpoints\Rollup;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class StopJob
 * Elasticsearch API name rollup.stop_job
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Rollup
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class StopJob extends AbstractEndpoint
{

    public function getURI()
    {
        $id = isset($this->id) ? $this->id : null;

        if (isset($id)) {
            return "/_rollup/job/$id/_stop";
        }
        throw new RuntimeException('Missing parameter for the endpoint rollup.stop_job');
    }

    public function getParamWhitelist()
    {
        return [
            'wait_for_completion',
            'timeout'
        ];
    }

    public function getMethod()
    {
        return 'POST';
    }
}
