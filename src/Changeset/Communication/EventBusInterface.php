<?php

namespace Changeset\Communication;

use Changeset\Event\EventInterface;
use Changeset\Event\ListenerInterface;
use Changeset\Event\ProjectorInterface;

interface EventBusInterface
{
    public function enableListeners();
    public function disableListeners();
    public function listenersEnabled(): bool;
    public function addListener(ListenerInterface $listener);
    public function addProjector(ProjectorInterface $projector);
    public function dispatch(EventInterface $event);
}