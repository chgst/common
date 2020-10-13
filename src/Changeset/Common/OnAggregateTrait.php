<?php

namespace Changeset\Common;

trait OnAggregateTrait
{
    /** @var string */
    protected $aggregateId;

    /** @var string */
    protected $aggregateType;

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
