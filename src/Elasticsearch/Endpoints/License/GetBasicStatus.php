<?php


namespace Elasticsearch\Endpoints\License;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetBasicStatus
 * Elasticsearch API name license.get_basic_status
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\License
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetBasicStatus extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_license/basic_status";
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
