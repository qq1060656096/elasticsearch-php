<?php


namespace Elasticsearch\Endpoints\Ilm;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ExplainLifecycle
 * Elasticsearch API name ilm.explain_lifecycle
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ilm
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ExplainLifecycle extends AbstractEndpoint
{

    public function getURI()
    {
        $index = isset($this->index) ? $this->index : null;

        if (isset($index)) {
            return "/$index/_ilm/explain";
        }
        throw new RuntimeException('Missing parameter for the endpoint ilm.explain_lifecycle');
    }

    public function getParamWhitelist()
    {
        return [
            'only_managed',
            'only_errors'
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }
}
