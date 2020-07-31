<?php


namespace Elasticsearch\Endpoints\Security;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ClearCachedRealms
 * Elasticsearch API name security.clear_cached_realms
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Security
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ClearCachedRealms extends AbstractEndpoint
{
    protected $realms;

    public function getURI()
    {
        $realms = isset($this->realms) ? $this->realms : null;

        if (isset($realms)) {
            return "/_security/realm/$realms/_clear_cache";
        }
        throw new RuntimeException('Missing parameter for the endpoint security.clear_cached_realms');
    }

    public function getParamWhitelist()
    {
        return [
            'usernames'
        ];
    }

    public function getMethod()
    {
        return 'POST';
    }

    public function setRealms($realms)
    {
        if (isset($realms) !== true) {
            return $this;
        }
        if (is_array($realms) === true) {
            $realms = implode(",", $realms);
        }
        $this->realms = $realms;

        return $this;
    }
}
