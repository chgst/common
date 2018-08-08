<?php

namespace Changeset\Communication;

use Changeset\Command\CommandInterface;

interface CommandBusInterface
{
    public function dispatch(CommandInterface $command);
}
