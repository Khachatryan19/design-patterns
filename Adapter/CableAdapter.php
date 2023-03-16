<?php

namespace Adapter;

class CableAdapter implements USBCableInterface
{
    private TypeCCable $adapter;

    public function __construct(TypeCCable $adapter)
    {
        $this->adapter = $adapter;
    }

    public function chargeTime(): int
    {
        return $this->adapter->chargingTime();
    }

    public function recipientDevices(): array
    {
        return $this->adapter->devices();
    }
}