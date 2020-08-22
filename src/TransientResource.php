<?php
/*
 * This file is part of the Makise-Co Framework
 * World line: 0.571024a
 *
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

namespace MakiseCo\Connection;

/**
 * This interface can be used for connection pooling with idle check feature
 */
interface TransientResource
{
    /**
     * Indicates if the resource is still valid.
     *
     * @return bool
     */
    public function isAlive(): bool;

    /**
     * Get the timestamp of the last usage of this resource.
     *
     * @return int Unix timestamp in seconds.
     */
    public function getLastUsedAt(): int;
}
