<?php

namespace Chgst\Event;

use Chgst\Common\HasPayloadInterface;
use Chgst\Common\OnAggregateInterface;

interface EventInterface extends OnAggregateInterface, HasPayloadInterface
{
    public function getName(): string;
    public function setName(string $eventName);
}