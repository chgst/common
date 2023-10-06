<?php

namespace Chgst\Common;

interface BlameableInterface
{
    public function getCreatedBy(): ?string;
    public function setCreatedBy(string $createdBy);
}