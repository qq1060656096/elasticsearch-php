<?php


namespace Elasticsearch\Endpoints\Ccr;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Stats
 * Elasticsearch API name ccr.stats
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ccr
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Stats extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_ccr/stats";
    }

    public function getParamWhitelist()
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
