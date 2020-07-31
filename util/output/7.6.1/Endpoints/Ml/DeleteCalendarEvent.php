<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteCalendarEvent
 * Elasticsearch API name ml.delete_calendar_event
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteCalendarEvent extends AbstractEndpoint
{
    protected $calendar_id;
    protected $event_id;

    public function getURI()
    {
        $calendar_id = isset($this->calendar_id) ? $this->calendar_id : null;
        $event_id = isset($this->event_id) ? $this->event_id : null;

        if (isset($calendar_id) && isset($event_id)) {
            return "/_ml/calendars/$calendar_id/events/$event_id";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.delete_calendar_event');
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

    public function setEventId($event_id)
    {
        if (isset($event_id) !== true) {
            return $this;
        }
        $this->event_id = $event_id;

        return $this;
    }
}
