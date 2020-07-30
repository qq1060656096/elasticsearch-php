<?php


namespace Elasticsearch\Endpoints\Slm;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Start
 * Elasticsearch API name slm.start
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Slm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Start extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_slm/start";
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
