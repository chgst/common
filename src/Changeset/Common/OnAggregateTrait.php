<?php

namespace Changeset\Common;

trait OnAggregateTrait
{
    protected string $aggregateId;

    protected string $aggregateType;

    public function getAggregateId() : string
    {
        return $this->aggregateId;
    }

    public function setAggregateId(string $aggregateId)
    {
        $this->aggregateId = $aggregateId;

        return $this;
    }

    public function getAggregateType(): string
    {
        return $this->aggregateType;
    }

    public function setAggregateType(string $aggregateType)
    {
        $this->aggregateType = $aggregateType;

        return $this;
    }
}
