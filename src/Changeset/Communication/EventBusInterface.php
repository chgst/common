<?php

namespace Changeset\Communication;

use Changeset\Event\EventInterface;

interface EventBusInterface
{
    public function dispatch(EventInterface $event);
}