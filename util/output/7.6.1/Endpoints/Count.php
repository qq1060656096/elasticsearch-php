<?php


namespace Elasticsearch\Endpoints;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Count
 * Elasticsearch API name count
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Count extends AbstractEndpoint
{

    public function getURI()
    {
        $index = $this->index ?? null;
        $type = $this->type ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($index) && isset($type)) {
            return "/$index/$type/_count";
        }
        if (isset($index)) {
            return "/$index/_count";
        }
        return "/_count";
    }

    public function getParamWhitelist()
    {
        return [
            'ignore_unavailable',
            'ignore_throttled',
            'allow_no_indices',
            'expand_wildcards',
            'min_score',
            'preference',
            'routing',
            'q',
            'analyzer',
            'analyze_wildcard',
            'default_operator',
            'df',
            'lenient',
            'terminate_after'
        ];
    }

    public function getMethod()
    {
        return isset($this->body) ? 'POST' : 'GET';
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
