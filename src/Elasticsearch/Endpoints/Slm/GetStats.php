<?php


namespace Elasticsearch\Endpoints\Slm;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetStats
 * Elasticsearch API name slm.get_stats
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Slm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetStats extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_slm/stats";
    }

    public function getParamWhitelist()
    {
        return [
            
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }
}
