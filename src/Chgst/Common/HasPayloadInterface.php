<?php

namespace Chgst\Common;

interface HasPayloadInterface
{
    public function getPayload();
    public function setPayload($payload);
}