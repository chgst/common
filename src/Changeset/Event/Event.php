<?php

namespace Changeset\Event;

use Changeset\Common\BlameableInterface;
use Changeset\Common\HasPayloadInterface;
use Changeset\Common\TimestampableInterface;

abstract class Event implements EventInterface, TimestampableInterface, BlameableInterface, HasPayloadInterface {}
