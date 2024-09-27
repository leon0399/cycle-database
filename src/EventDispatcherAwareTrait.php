<?php

namespace Cycle\Database;

use Psr\EventDispatcher\EventDispatcherInterface;

trait EventDispatcherAwareTrait
{
    protected ?EventDispatcherInterface $eventDispatcher = null;

    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher): void
    {
        $this->eventDispatcher = $eventDispatcher;
    }
}
