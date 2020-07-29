<?php


namespace Elasticsearch\Endpoints\Ingest;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ProcessorGrok
 * Elasticsearch API name ingest.processor_grok
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ingest
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ProcessorGrok extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_ingest/processor/grok";
    }

    public function getParamWhitelist()
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
