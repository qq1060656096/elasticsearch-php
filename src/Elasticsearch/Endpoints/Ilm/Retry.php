<?php


namespace Elasticsearch\Endpoints\Ilm;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Retry
 * Elasticsearch API name ilm.retry
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ilm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Retry extends AbstractEndpoint
{

    public function getURI()
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_ilm/retry";
        }
        throw new RuntimeException('Missing parameter for the endpoint ilm.retry');
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
