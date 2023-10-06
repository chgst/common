<?php

namespace Chgst\Event;

interface RepositoryInterface
{
    public function create(): EventInterface;
    public function append(EventInterface $event);
    public function getIterator(): \Iterator;
}