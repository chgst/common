<?php

namespace Changeset\Common;

interface OnAggregateInterface
{
    public function getAggregateId(): string;
    public function setAggregateId(string $aggregateId);

    public function getAggregateType(): string;
    public function setAggregateType(string $aggregateType);
}