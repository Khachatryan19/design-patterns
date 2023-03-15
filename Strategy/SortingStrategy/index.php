<?php

use Strategy\SortingStrategy\Context;
use Strategy\SortingStrategy\OrderByAge;
use Strategy\SortingStrategy\OrderByName;

spl_autoload_register(function($class){
    $className = str_replace('Strategy\SortingStrategy\\', '', $class);

    require $className . '.php';
});

$context = new Context(new OrderByAge());

$data = [
    [
        'name' => 'Davit',
        'surname' => 'Khachatryan',
        'age' => 23
    ],
    [
        'name' => 'Arsen',
        'surname' => 'Frankulyan',
        'age' => 21
    ],
    [
        'name' => 'Garik',
        'surname' => 'Meliqsetyan',
        'age' => 22
    ]
];

$context->produce($data);

echo "<pre>";
print_r($data);

$context->setStrategy(new OrderByName());
$context->produce($data);

echo "<pre>";
print_r($data);