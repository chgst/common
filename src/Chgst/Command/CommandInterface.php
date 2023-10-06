<?php

namespace Chgst\Command;

use Chgst\Common\HasPayloadInterface;
use Chgst\Common\OnAggregateInterface;

interface CommandInterface extends OnAggregateInterface, HasPayloadInterface
{
    public function getName(): string;
    public function setName(string $commandName);
}