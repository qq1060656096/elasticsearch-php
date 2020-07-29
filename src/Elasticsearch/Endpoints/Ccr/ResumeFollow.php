<?php


namespace Elasticsearch\Endpoints\Ccr;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ResumeFollow
 * Elasticsearch API name ccr.resume_follow
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ccr
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ResumeFollow extends AbstractEndpoint
{

    public function getURI()
    {
        $index = isset($this->index) ? $this->index : null;

        if (isset($index)) {
            return "/$index/_ccr/resume_follow";
        }
        throw new RuntimeException('Missing parameter for the endpoint ccr.resume_follow');
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
