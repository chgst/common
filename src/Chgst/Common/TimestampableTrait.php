<?php

namespace Chgst\Common;

trait TimestampableTrait
{
    protected \DateTimeInterface $createdAt;

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