<?php


namespace Elasticsearch\Endpoints\Graph;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Explore
 * Elasticsearch API name graph.explore
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Graph
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Explore extends AbstractEndpoint
{

    public function getURI()
    {
        if (isset($this->index) !== true) {
            throw new RuntimeException(
                'index is required for explore'
            );
        }
        $index = $this->index;
        $type = isset($this->type) ? $this->type : null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($type)) {
            return "/$index/$type/_graph/explore";
        }
        return "/$index/_graph/explore";
    }

    public function getParamWhitelist()
    {
        return [
            'routing',
            'timeout'
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
