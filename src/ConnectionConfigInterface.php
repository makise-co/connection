<?php
/*
 * This file is part of the Makise-Co Postgres Client
 * World line: 0.571024a
 *
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

namespace MakiseCo\Connection;

interface ConnectionConfigInterface
{
    public function getHost(): string;

    public function getPort(): int;

    public function getUser(): ?string;

    public function getPassword(): ?string;

    /**
     * getDatabase could be forced to return string or null, but Redis database is int
     *
     * @return int|string|null
     */
    public function getDatabase();

    public function getConnectionString(): string;
}
