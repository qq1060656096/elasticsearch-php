<?php


namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class PutCalendarJob
 * Elasticsearch API name ml.put_calendar_job
 * Generated running $ php util/GenerateEndpoints.php 7.6.1
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Ml
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PutCalendarJob extends AbstractEndpoint
{
    protected $calendar_id;
    protected $job_id;

    public function getURI()
    {
        $calendar_id = isset($this->calendar_id) ? $this->calendar_id : null;
        $job_id = isset($this->job_id) ? $this->job_id : null;

        if (isset($calendar_id) && isset($job_id)) {
            return "/_ml/calendars/$calendar_id/jobs/$job_id";
        }
        throw new RuntimeException('Missing parameter for the endpoint ml.put_calendar_job');
    }

    public function getParamWhitelist()
    {
        return [];
    }

    public function getMethod()
    {
        return 'PUT';
    }

    public function setCalendarId($calendar_id)
    {
        if (isset($calendar_id) !== true) {
            return $this;
        }
        $this->calendar_id = $calendar_id;

        return $this;
    }

    public function setJobId($job_id)
    {
        if (isset($job_id) !== true) {
            return $this;
        }
        $this->job_id = $job_id;

        return $this;
    }
}
