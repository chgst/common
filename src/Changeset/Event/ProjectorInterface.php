<?php

namespace Changeset\Event;

interface ProjectorInterface
{
    public function process(EventInterface $event);
}
