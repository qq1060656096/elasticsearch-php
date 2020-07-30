<?php


namespace Elasticsearch\Endpoints\Xpack;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Usage
 * Elasticsearch API name xpack.usage
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Xpack
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Usage extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_xpack/usage";
    }

    public function getParamWhitelist()
    {
        return [
            'master_timeout'
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }
}
