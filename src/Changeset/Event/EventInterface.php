<?php

namespace Changeset\Event;

use Changeset\Common\HasPayloadInterface;
use Changeset\Common\OnAggregateInterface;

interface EventInterface extends OnAggregateInterface, HasPayloadInterface
{
    public function getName(): string;
    public function setName(string $eventName);
}