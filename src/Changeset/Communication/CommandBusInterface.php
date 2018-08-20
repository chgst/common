<?php

namespace Changeset\Communication;

use Changeset\Command\CommandInterface;
use Changeset\Command\HandlerInterface;

interface CommandBusInterface
{
    public function addHandler(HandlerInterface $handler);
    public function dispatch(CommandInterface $command);
}
