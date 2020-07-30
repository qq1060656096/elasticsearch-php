<?php


namespace Elasticsearch\Endpoints\Ilm;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class RemovePolicy
 * Elasticsearch API name ilm.remove_policy
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ilm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class RemovePolicy extends AbstractEndpoint
{

    public function getURI()
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_ilm/remove";
        }
        throw new RuntimeException('Missing parameter for the endpoint ilm.remove_policy');
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
