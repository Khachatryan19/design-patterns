<?php

namespace Adapter;
class TypeACable implements USBCableInterface
{
    public function chargeTime(): int
    {
        return 12000;
    }

    public function recipientDevices(): array
    {
        return [
            'iphone 6',
            'iphone 7',
            'iphone 8',
            'iphone x',
        ];
    }
}