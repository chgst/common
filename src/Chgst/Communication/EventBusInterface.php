<?php

namespace Chgst\Communication;

use Chgst\Event\EventInterface;
use Chgst\Event\ListenerInterface;
use Chgst\Event\ProjectorInterface;

interface EventBusInterface
{
    public function enableListeners();
    public function disableListeners();
    public function listenersEnabled(): bool;
    public function addListener(ListenerInterface $listener, $priority = 0);
    public function addProjector(ProjectorInterface $projector, $priority = 0);
    public function dispatch(EventInterface $event);
}