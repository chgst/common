<?php

namespace Changeset\Common;

trait BlameableTrait
{
    protected string $createdBy;

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