<?php

namespace Changeset\Common;

trait BlameableTrait
{
    /** @var string */
    protected $createdBy;

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(string $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }
}