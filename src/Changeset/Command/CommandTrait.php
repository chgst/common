<?php

namespace Changeset\Command;

trait CommandTrait
{
    protected $aggregateId;

    protected $payload;

    protected function init(string $aggregateId, $payload)
    {
        $this->aggregateId = $aggregateId;
        $this->payload = $payload;
    }

    public function getAggregateId()
    {
        return $this->aggregateId;
    }

    public function getPayload()
    {
        return $this->payload;
    }

    public function setPayload($payload)
    {
        $this->payload = $payload;

        return $this;
    }
}