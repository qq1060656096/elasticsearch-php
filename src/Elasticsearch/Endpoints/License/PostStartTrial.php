<?php


namespace Elasticsearch\Endpoints\License;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class PostStartTrial
 * Elasticsearch API name license.post_start_trial
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\License
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PostStartTrial extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_license/start_trial";
    }

    public function getParamWhitelist()
    {
        return [
            'type',
            'acknowledge'
        ];
    }

    public function getMethod()
    {
        return 'POST';
    }
}
