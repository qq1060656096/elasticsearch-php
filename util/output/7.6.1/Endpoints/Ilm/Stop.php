<?php


namespace Elasticsearch\Endpoints\Ilm;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Stop
 * Elasticsearch API name ilm.stop
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ilm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Stop extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_ilm/stop";
    }

    public function getParamWhitelist()
    {
        return [
            
        ];
    }

    public function getMethod()
    {
        return 'POST';
    }
}
