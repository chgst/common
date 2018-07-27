<?php

namespace Changeset\Common;

interface VersionableInterface
{
    public function getVersion(): int;
}