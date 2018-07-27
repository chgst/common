<?php

namespace Changeset\Command;

interface CommandInterface
{
    public function getAggregateId();

    public function getPayload();
    public function setPayload($payload);
}