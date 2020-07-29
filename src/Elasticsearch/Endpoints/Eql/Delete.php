<?php


namespace Elasticsearch\Endpoints\Eql;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Delete
 * Elasticsearch API name eql.delete
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Eql
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Delete extends AbstractEndpoint
{

    public function getURI()
    {
        $id = isset($this->id) ? $this->id : null;

        if (isset($id)) {
            return "/_eql/search/$id";
        }
        throw new RuntimeException('Missing parameter for the endpoint eql.delete');
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
