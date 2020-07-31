<?php


namespace Elasticsearch\Endpoints\Ingest;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class PutPipeline
 * Elasticsearch API name ingest.put_pipeline
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ingest
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PutPipeline extends AbstractEndpoint
{

    public function getURI()
    {
        $id = isset($this->id) ? $this->id : null;

        if (isset($id)) {
            return "/_ingest/pipeline/$id";
        }
        throw new RuntimeException('Missing parameter for the endpoint ingest.put_pipeline');
    }

    public function getParamWhitelist()
    {
        return [
            'master_timeout',
            'timeout'
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
}
