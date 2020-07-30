<?php


namespace Elasticsearch\Endpoints\Ilm;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetStatus
 * Elasticsearch API name ilm.get_status
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ilm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetStatus extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_ilm/status";
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
