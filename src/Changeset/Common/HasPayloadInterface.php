<?php

namespace Changeset\Common;

interface HasPayloadInterface
{
    public function getPayload();
    public function setPayload($payload);
}