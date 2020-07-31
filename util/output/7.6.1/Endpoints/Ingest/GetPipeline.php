<?php


namespace Elasticsearch\Endpoints\Ingest;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetPipeline
 * Elasticsearch API name ingest.get_pipeline
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ingest
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetPipeline extends AbstractEndpoint
{

    public function getURI()
    {
        $id = isset($this->id) ? $this->id : null;

        if (isset($id)) {
            return "/_ingest/pipeline/$id";
        }
        return "/_ingest/pipeline";
    }

    public function getParamWhitelist()
    {
        return [
            'master_timeout'
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }

    public function setId($id)
    {
        if (isset($id) !== true) {
            return $this;
        }
        $this->id = $id;

        return $this;
    }
}
