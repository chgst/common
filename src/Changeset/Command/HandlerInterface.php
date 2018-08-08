<?php

namespace Changeset\Command;

interface HandlerInterface
{
    public function supports(CommandInterface $command): bool;
    public function process(CommandInterface $command);
}