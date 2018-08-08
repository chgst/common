<?php

namespace Changeset\Command;

use Changeset\Common\HasPayloadTrait;
use Changeset\Common\OnAggregateTrait;

class Command implements CommandInterface
{
    use CommandTrait, OnAggregateTrait, HasPayloadTrait;

    public function __construct(string $name, string $aggregateType, string $aggregateId, $payload)
    {
        $this->setName($name);
        $this->setAggregateType($aggregateType);
        $this->setAggregateId($aggregateId);
        $this->setPayload($payload);
    }
}
