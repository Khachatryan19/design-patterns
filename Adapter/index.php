<?php

use Adapter\CableAdapter;
use Adapter\TypeCCable;

spl_autoload_register(function($class){
    $className = str_replace('Adapter\\', '', $class);

    require $className . '.php';
});

$cableAdapter = new CableAdapter(new TypeCCable());
echo 'Charge time in seconds: ' . $cableAdapter->chargeTime() . "<br>";
echo "<br>" . 'Devices which support cable: ';
echo "<pre>";
print_r($cableAdapter->recipientDevices());