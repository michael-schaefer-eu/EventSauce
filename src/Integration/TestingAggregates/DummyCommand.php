<?php

declare(strict_types=1);

namespace EventSauce\EventSourcing\Integration\TestingAggregates;

use EventSauce\EventSourcing\AggregateRootId;

class DummyCommand
{
    /**
     * @var AggregateRootId
     */
    private $aggregateRootId;

    public function __construct(AggregateRootId $aggregateRootId)
    {
        $this->aggregateRootId = $aggregateRootId;
    }

    public function aggregateRootId(): AggregateRootId
    {
        return $this->aggregateRootId;
    }
}
