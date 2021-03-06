<?php

namespace Changeset\Communication;

use Changeset\Command\CommandInterface;
use Changeset\Command\HandlerInterface;

interface CommandBusInterface
{
    public function setEventBus(EventBusInterface $eventBus);
    public function setHandler(HandlerInterface $handler);
    public function dispatch(CommandInterface $command);
}
