<?php

namespace Changeset\Event;

interface RepositoryInterface
{
    public function create(): EventInterface;
    public function append(EventInterface $event);
}