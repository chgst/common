<?php

namespace spec\Changeset\Event;

use Changeset\Event\Event;
use Changeset\Event\EventInterface;
use PhpSpec\ObjectBehavior;

class EventSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Event::class);
        $this->shouldHaveType(EventInterface::class);
    }
}
