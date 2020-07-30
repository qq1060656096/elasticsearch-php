<?php



namespace Elasticsearch\Connections;

use Elasticsearch\Serializers\SerializerInterface;
use Elasticsearch\Transport;
use Psr\Log\LoggerInterface;

/**
 * Interface ConnectionInterface
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Connections
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
interface ConnectionInterface
{
    /**
     * Get the transport schema for this connection
     */
    public function getTransportSchema();

    /**
     * Get the hostname for this connection
     */
    public function getHost();

    /**
     * Get the port for this connection
     *
     * @return int
     */
    public function getPort();

    /**
     * Get the username:password string for this connection, null if not set
     */
    public function getUserPass();

    /**
     * Get the URL path suffix, null if not set
     */
    public function getPath();

    /**
     * Check to see if this instance is marked as 'alive'
     */
    public function isAlive();

    /**
     * Mark this instance as 'alive'
     */
    public function markAlive();

    /**
     * Mark this instance as 'dead'
     */
    public function markDead();

    /**
     * Return an associative array of information about the last request
     */
    public function getLastRequestInfo();

    /**
     * @param  null $body
     * @return mixed
     */
    public function performRequest($method,  $uri, array $params = [], $body = null, array $options = [], Transport $transport = null);
}
