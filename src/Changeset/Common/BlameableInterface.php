<?php

namespace Changeset\Common;

interface BlameableInterface
{
    public function getCreatedBy(): ?string;
    public function setCreatedBy(string $createdBy);
}