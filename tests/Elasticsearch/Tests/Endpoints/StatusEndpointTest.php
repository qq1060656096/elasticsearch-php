<?php



namespace Elasticsearch\Tests\Endpoints;

use Elasticsearch\Endpoints\Snapshot\Status;
use Elasticsearch\Common\Exceptions;

class StatusEndpointTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Elasticsearch\Endpoints\Snapshot\Status
     */
    private $endpoint;

    protected function setUp()
    {
        $this->endpoint = new Status();
    }

    public static function statusParams()
    {
        return [
            [
                'repository' => 'my_backup',
                'snapshot' => null,
                'expected' => '/_snapshot/my_backup/_status',
            ],
            [
                'repository' => 'my_backup',
                'snapshot' => 'snapshot_1',
                'expected' => '/_snapshot/my_backup/snapshot_1/_status',
            ],
        ];
    }

    /**
     * @dataProvider statusParams
     */
    public function testGetUriReturnsAppropriateUri($repository, $snapshot, $expected)
    {
        if ($repository) {
            $this->endpoint->setRepository($repository);
        }

        if ($snapshot) {
            $this->endpoint->setSnapshot($snapshot);
        }

        $this->assertSame($expected, $this->endpoint->getURI());
    }
}
