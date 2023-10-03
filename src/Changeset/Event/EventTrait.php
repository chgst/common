<?php

namespace Changeset\Event;

trait EventTrait
{
    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}