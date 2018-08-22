<?php

namespace Changeset\Event;

interface ListenerInterface
{
    public function process(EventInterface $event);
}
