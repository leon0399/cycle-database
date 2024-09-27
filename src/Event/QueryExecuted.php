<?php

namespace Cycle\Database\Event;

use Cycle\Database\Driver\DriverInterface;

final class QueryExecuted extends AbstractDriverEvent
{
    public function __construct(
        public readonly string $query,
        public readonly array $params,
        public readonly float $queryStart,
        public readonly float $queryEnd,
        DriverInterface $driver,
    ) {
        parent::__construct($driver);
    }
}
