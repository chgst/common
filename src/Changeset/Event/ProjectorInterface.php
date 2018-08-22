<?php

namespace Changeset\Event;

interface ProjectorInterface
{
    public function supports(EventInterface $command): bool;
    public function process(EventInterface $event);
}
