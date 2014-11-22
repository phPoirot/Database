<?php
namespace Poirot\Database\Platform;

use Poirot\Database\Connection\ConnectionInterface;
use Poirot\Database\Driver\ResultInterface;

interface PlatformInterface
{
    /**
     * Attain To Abstract Result From Specific Engine Result
     *
     * @param mixed $result Connection Engine(resource) Result
     *
     * @return ResultInterface
     */
    public function attainAbstractResult($result);

    /**
     * Set Platform Connection
     *
     * @param ConnectionInterface $conn Connection
     *
     * @return $this
     */
    public function setConnection(ConnectionInterface $conn);

    /**
     * Get Connection Info
     *
     * @return mixed
     */
    function getInfo();
}
