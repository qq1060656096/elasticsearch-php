<?php


namespace Elasticsearch\Endpoints\Ssl;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Certificates
 * Elasticsearch API name ssl.certificates
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ssl
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Certificates extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_ssl/certificates";
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
