<?php

namespace Changeset\Common;

trait HasPayloadTrait
{
    protected $payload;

    public function getPayload()
    {
        return $this->payload;
    }

    public function setPayload($payload)
    {
        $this->payload = $payload;

        return $this;
    }
}