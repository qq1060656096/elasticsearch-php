<?php


namespace Elasticsearch\Endpoints\License;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Get
 * Elasticsearch API name license.get
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\License
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Get extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_license";
    }

    public function getParamWhitelist()
    {
        return [
            'local',
            'accept_enterprise'
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }
}
