<?php

namespace Changeset\Event;

use Changeset\Common\OnAggregateTrait;
use Changeset\Common\BlameableInterface;
use Changeset\Common\BlameableTrait;
use Changeset\Common\HasPayloadTrait;
use Changeset\Common\TimestampableInterface;
use Changeset\Common\TimestampableTrait;

class Event implements EventInterface, TimestampableInterface, BlameableInterface
{
    use EventTrait, OnAggregateTrait, TimestampableTrait, HasPayloadTrait, BlameableTrait;
}
