<?php

namespace Changeset\Command;

trait CommandTrait
{
    /** @var string */
    protected $name;

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