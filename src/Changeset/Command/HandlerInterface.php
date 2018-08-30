<?php

namespace Changeset\Command;

use Changeset\Event\EventInterface;
use Changeset\Event\RepositoryInterface;

interface HandlerInterface
{
    public function setRepository(RepositoryInterface $repository);
    public function process(CommandInterface $command): EventInterface;
}