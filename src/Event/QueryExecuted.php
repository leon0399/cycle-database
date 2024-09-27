<?php

namespace Cycle\Database\Event;

use Cycle\Database\Driver\DriverInterface;

class QueryExecuted
{
    public function __construct(
        public readonly string $query,
        public readonly array $params,
        public readonly float $queryStart,
        public readonly float $queryEnd,
        public readonly DriverInterface $driver,
    ) {
    }
}
