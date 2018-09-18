<?php

namespace Changeset\Event;

interface ProjectorInterface
{
    public function supports(EventInterface $event): bool;
    public function process(EventInterface $event);
}
