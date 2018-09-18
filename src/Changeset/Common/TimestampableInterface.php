<?php

namespace Changeset\Common;

interface TimestampableInterface
{
    public function getCreatedAt(): \DateTimeInterface;
    public function setCreatedAt(\DateTimeInterface $dateTime);
}