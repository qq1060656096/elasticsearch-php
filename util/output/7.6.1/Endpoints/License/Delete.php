<?php


namespace Elasticsearch\Endpoints\License;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Delete
 * Elasticsearch API name license.delete
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\License
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Delete extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_license";
    }

    public function getParamWhitelist()
    {
        return [];
    }

    public function getMethod()
    {
        return 'DELETE';
    }
}
