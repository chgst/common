<?php

namespace Chgst\Communication;

use Chgst\Command\CommandInterface;
use Chgst\Command\HandlerInterface;

interface CommandBusInterface
{
    public function setEventBus(EventBusInterface $eventBus);
    public function setHandler(HandlerInterface $handler);
    public function dispatch(CommandInterface $command);
}
