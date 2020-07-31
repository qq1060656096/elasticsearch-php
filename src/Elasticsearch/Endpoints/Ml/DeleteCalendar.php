<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteCalendar
 * Elasticsearch API name ml.delete_calendar
 * Generated running $ php util/GenerateEndpoints.php 7.8
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteCalendar extends AbstractEndpoint
{
    protected $calendar_id;

    public function getURI()
    {
        $calendar_id = isset($this->calendar_id) ? $this->calendar_id : null;

        if (isset($calendar_id)) {
            return "/_ml/calendars/$calendar_id";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.delete_calendar');
    }

    public function getParamWhitelist()
    {
        return [];
    }

    public function getMethod()
    {
        return 'DELETE';
    }

    public function setCalendarId($calendar_id)
    {
        if (isset($calendar_id) !== true) {
            return $this;
        }
        $this->calendar_id = $calendar_id;

        return $this;
    }
}
