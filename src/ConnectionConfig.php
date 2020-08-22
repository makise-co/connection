<?php
/*
 * This file is part of the Makise-Co Framework
 * World line: 0.571024a
 *
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

namespace MakiseCo\Connection;

abstract class ConnectionConfig implements ConnectionConfigInterface
{
    private string $host;
    private int $port;

    private ?string $user = null;
    private ?string $password = null;

    /**
     * @var int|string|null
     */
    private $database;

    /**
     * @param string $host
     * @param int $port
     * @param string|null $user
     * @param string|null $password
     * @param string|int|null $database
     */
    public function __construct(
        string $host,
        int $port,
        ?string $user = null,
        ?string $password = null,
        $database = null
    ) {
        $this->host = $host;
        $this->port = $port;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }

    /**
     * {@inheritDoc}
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * {@inheritDoc}
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * {@inheritDoc}
     */
    public function getDatabase()
    {
        return $this->database;
    }
}
