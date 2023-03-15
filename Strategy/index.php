<?php

use Strategy\Message;
use Strategy\StrategyGMail;
use Strategy\StrategyMail;

spl_autoload_register(function($class){
    $className = str_replace('Strategy\\', '', $class);

    require $className . '.php';
});

$message = new Message(new StrategyGMail());
echo $message->send() . "</br>";

$message->setStrategy(new StrategyMail());
echo $message->send() . "</br>";