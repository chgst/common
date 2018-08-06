<?php

namespace Changeset\Command;

use Changeset\Common\HasPayloadTrait;
use Changeset\Common\OnAggregateTrait;

class Command implements CommandInterface
{
    use CommandTrait, OnAggregateTrait, HasPayloadTrait;
}
