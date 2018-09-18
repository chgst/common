<?php

namespace Changeset\Event;

interface ListenerInterface
{
    public function supports(EventInterface $event): bool;
    public function process(EventInterface $event);
}
