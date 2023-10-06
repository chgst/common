<?php

namespace Chgst\Event;

interface ProjectorInterface
{
    public function supports(EventInterface $event): bool;
    public function process(EventInterface $event);
}
