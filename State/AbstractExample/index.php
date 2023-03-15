<?php

use State\AbstractExample\Context;
use State\AbstractExample\StateOne;
use State\AbstractExample\StateTwo;

spl_autoload_register(function($class){
    $className = str_replace('State\AbstractExample\\', '', $class);

    require $className . '.php';
});

$context = new Context(StateOne::getInstance());
echo $context->operation();
echo $context->operation();
echo $context->operation();
echo $context->operation();

