<?php

namespace Chgst\Command;

use Chgst\Event\EventInterface;
use Chgst\Event\RepositoryInterface;

interface HandlerInterface
{
    public function setRepository(RepositoryInterface $repository);
    public function process(CommandInterface $command): EventInterface;
}