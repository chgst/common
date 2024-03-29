<?php

namespace Chgst\Common;

interface TimestampableInterface
{
    public function getCreatedAt(): \DateTimeInterface;
    public function setCreatedAt(\DateTimeInterface $dateTime);
}