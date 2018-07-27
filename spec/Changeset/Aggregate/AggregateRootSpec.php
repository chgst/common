<?php

namespace spec\Changeset\Aggregate;

use Changeset\Aggregate\AggregateRoot;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AggregateRootSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AggregateRoot::class);
    }
}
