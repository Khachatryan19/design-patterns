<?php

namespace Adapter;

interface USBCableInterface
{
    public function chargeTime(): int;

    public function recipientDevices(): array;
}