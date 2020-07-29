<?php


namespace Elasticsearch\Endpoints\Sql;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ClearCursor
 * Elasticsearch API name sql.clear_cursor
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Sql
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ClearCursor extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_sql/close";
    }

    public function getParamWhitelist()
    {
        return [];
    }

    public function getMethod()
    {
        return 'POST';
    }

    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
