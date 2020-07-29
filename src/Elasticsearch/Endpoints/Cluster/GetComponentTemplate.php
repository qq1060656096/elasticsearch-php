<?php


namespace Elasticsearch\Endpoints\Cluster;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetComponentTemplate
 * Elasticsearch API name cluster.get_component_template
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cluster
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetComponentTemplate extends AbstractEndpoint
{
    protected $name;

    public function getURI()
    {
        $name = isset($this->name) ? $this->name : null;

        if (isset($name)) {
            return "/_component_template/$name";
        }
        return "/_component_template";
    }

    public function getParamWhitelist()
    {
        return [
            'master_timeout',
            'local'
        ];
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
        if (is_array($name) === true) {
            $name = implode(",", $name);
        }
        $this->name = $name;

        return $this;
    }
}
