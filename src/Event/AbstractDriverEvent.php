<?php

namespace Cycle\Database\Event;

use Cycle\Database\Driver\DriverInterface;

abstract class AbstractDriverEvent
{
    public function __construct(
        public readonly DriverInterface $driver,
    ) {
    }
}
