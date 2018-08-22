<?php

namespace Changeset\Event;

interface ListenerInterface
{
    public function supports(EventInterface $command): bool;
    public function process(EventInterface $event);
}
