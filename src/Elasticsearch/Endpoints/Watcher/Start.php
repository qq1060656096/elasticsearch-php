<?php


namespace Elasticsearch\Endpoints\Watcher;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Start
 * Elasticsearch API name watcher.start
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Watcher
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Start extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_watcher/_start";
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
