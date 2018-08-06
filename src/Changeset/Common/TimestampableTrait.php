<?php

namespace Changeset\Common;

trait TimestampableTrait
{
    /** @var \DateTimeInterface */
    protected $createdAt;

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $dateTime)
    {
        $this->createdAt = $dateTime;

        return $this;
    }
}