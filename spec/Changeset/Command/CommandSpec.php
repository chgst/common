<?php

namespace spec\Changeset\Command;

use Changeset\Command\Command;
use Changeset\Command\CommandInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Command::class);
        $this->shouldHaveType(CommandInterface::class);
    }
}
