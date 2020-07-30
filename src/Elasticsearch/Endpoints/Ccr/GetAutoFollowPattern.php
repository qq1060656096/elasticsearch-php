<?php


namespace Elasticsearch\Endpoints\Ccr;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetAutoFollowPattern
 * Elasticsearch API name ccr.get_auto_follow_pattern
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ccr
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetAutoFollowPattern extends AbstractEndpoint
{
    protected $name;

    public function getURI()
    {
        $name = $this->name ?? null;

        if (isset($name)) {
            return "/_ccr/auto_follow/$name";
        }
        return "/_ccr/auto_follow";
    }

    public function getParamWhitelist()
    {
        return [];
    }

    public function getMethod()
    {
        return 'GET';
    }

    public function setName($name)
    {
        if (isset($name) !== true) {
            return $this;
        }
        $this->name = $name;

        return $this;
    }
}
