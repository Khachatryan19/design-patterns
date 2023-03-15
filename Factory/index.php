<?php

use Factory\Windows;
use Factory\Mac;

spl_autoload_register(function ($class){
    $className = str_replace('Factory\\', '', $class);

    require $className . '.php';
});
session_start();

echo <<<HTML
<button type="button" onclick="function ()">Windows Button</button>
HTML;

if ($_SESSION['OS'] === 'windows'){
    $_SESSION['OS'] = 'mac';
    $mac = new Mac();
    $mac->paint();
}else{
    $_SESSION['OS'] = 'windows';
    $windows = new Windows();
    $windows->paint();
}