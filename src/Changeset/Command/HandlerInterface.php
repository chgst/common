<?php

namespace Changeset\Command;

use Changeset\Event\RepositoryInterface;

interface HandlerInterface
{
    public function setRepository(RepositoryInterface $repository): self;
    public function supports(CommandInterface $command): bool;
    public function process(CommandInterface $command);
}