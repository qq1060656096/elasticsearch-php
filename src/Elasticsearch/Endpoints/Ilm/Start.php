<?php


namespace Elasticsearch\Endpoints\Ilm;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Start
 * Elasticsearch API name ilm.start
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ilm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Start extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_ilm/start";
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
