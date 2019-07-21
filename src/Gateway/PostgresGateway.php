<?php
namespace App\Gateway;

use Doctrine\DBAL\Connection;

abstract class PostgresGateway
{
    /** @var Connection */
    protected $connection;

    /**
     * PostgresGateway constructor.
     *
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->setConnection($connection);
    }

    /**
     * Get the value of the property Connection
     *
     * @return Connection
     */
    public function getConnection(): Connection
    {
        return $this->connection;
    }

    /**
     * Set the value of the property Connection
     *
     * @param Connection $connection
     *
     * @return PostgresGateway
     */
    protected function setConnection(Connection $connection): PostgresGateway
    {
        $this->connection = $connection;

        return $this;
    }
}
