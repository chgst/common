<?php

namespace Changeset\Event;

interface RepositoryInterface
{
    public function append(EventInterface $event);
}