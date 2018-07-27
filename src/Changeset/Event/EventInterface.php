<?php

namespace Changeset\Event;

interface EventInterface
{
    public function getType(): string;

    public function getAggregateId(): string;
    public function setAggregateId(string $aggregateId);

    public function getAggregateType(): string;
}