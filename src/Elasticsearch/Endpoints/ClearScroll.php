<?php


namespace Elasticsearch\Endpoints;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ClearScroll
 * Elasticsearch API name clear_scroll
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ClearScroll extends AbstractEndpoint
{
    protected $scroll_id;

    public function getURI()
    {
        $scroll_id = isset($this->scroll_id) ? $this->scroll_id : null;
        if (isset($scroll_id)) {
            @trigger_error('A scroll id can be quite large and should be specified as part of the body', E_USER_DEPRECATED);
        }

        if (isset($scroll_id)) {
            return "/_search/scroll/$scroll_id";
        }
        return "/_search/scroll";
    }

    public function getParamWhitelist()
    {
        return [
            
        ];
    }

    public function getMethod()
    {
        return 'DELETE';
    }

    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setScrollId($scroll_id)
    {
        if (isset($scroll_id) !== true) {
            return $this;
        }
        if (is_array($scroll_id) === true) {
            $scroll_id = implode(",", $scroll_id);
        }
        $this->scroll_id = $scroll_id;

        return $this;
    }
}
