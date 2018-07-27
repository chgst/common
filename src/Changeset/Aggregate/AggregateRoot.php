<?php

namespace Changeset\Aggregate;

class AggregateRoot
{
    protected $version = 0;

    protected $aggregateId;

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    public function getAggregateId()
    {
        return $this->aggregateId;
    }

    public function setAggregateId($aggregateId)
    {
        $this->aggregateId = $aggregateId;

        return $this;
    }
}
