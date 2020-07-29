<?php


namespace Elasticsearch\Endpoints\Cluster;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ExistsComponentTemplate
 * Elasticsearch API name cluster.exists_component_template
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cluster
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ExistsComponentTemplate extends AbstractEndpoint
{
    protected $name;

    public function getURI()
    {
        $name = isset($this->name) ? $this->name : null;

        if (isset($name)) {
            return "/_component_template/$name";
        }
        throw new RuntimeException('Missing parameter for the endpoint cluster.exists_component_template');
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
        return 'HEAD';
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
