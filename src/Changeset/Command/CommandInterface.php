<?php

namespace Changeset\Command;

use Changeset\Common\HasPayloadInterface;
use Changeset\Common\OnAggregateInterface;

interface CommandInterface extends OnAggregateInterface, HasPayloadInterface
{
    public function getName(): string;
    public function setName(string $commandName);
}