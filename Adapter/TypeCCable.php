<?php

namespace Adapter;

class TypeCCable
{
    public function chargingTime(): string
    {
        return 6890;
    }

    public function devices(): array
    {
        return [
            'iphone 11 pro',
            'iphone 12',
            'iphone 12 pro',
            'iphone 13',
            'iphone 14',
            'iphone 14 pro',
        ];
    }
}