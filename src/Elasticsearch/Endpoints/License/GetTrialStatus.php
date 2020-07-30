<?php


namespace Elasticsearch\Endpoints\License;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetTrialStatus
 * Elasticsearch API name license.get_trial_status
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\License
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetTrialStatus extends AbstractEndpoint
{

    public function getURI()
    {

        return "/_license/trial_status";
    }

    public function getParamWhitelist()
    {
        return [
            
        ];
    }

    public function getMethod()
    {
        return 'GET';
    }
}
