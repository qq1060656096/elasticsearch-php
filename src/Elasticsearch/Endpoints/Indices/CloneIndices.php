<?php


namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class CloneIndices
 * Elasticsearch API name indices.clone
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class CloneIndices extends AbstractEndpoint
{
    protected $target;

    public function getURI()
    {
        $index = isset($this->index) ? $this->index : null;
        $target = isset($this->target) ? $this->target : null;

        if (isset($index) && isset($target)) {
            return "/$index/_clone/$target";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.clone');
    }

    public function getParamWhitelist()
    {
        return [
            'timeout',
            'master_timeout',
            'wait_for_active_shards'
        ];
    }

    public function getMethod()
    {
        return 'PUT';
    }

    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setTarget($target)
    {
        if (isset($target) !== true) {
            return $this;
        }
        $this->target = $target;

        return $this;
    }
}
