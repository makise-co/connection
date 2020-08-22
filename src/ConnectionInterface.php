<?php
/*
 * This file is part of the Makise-Co Framework
 * World line: 0.571024a
 *
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

namespace MakiseCo\Connection;

interface ConnectionInterface extends TransientResource
{
    /**
     * Closes the connection
     *
     * @return mixed
     */
    public function close();
}
