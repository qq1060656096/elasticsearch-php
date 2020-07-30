<?php


namespace Elasticsearch\Endpoints\Enrich;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Stats
 * Elasticsearch API name enrich.stats
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Enrich
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Stats extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_enrich/_stats";
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
