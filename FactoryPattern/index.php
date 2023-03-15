<?php

require_once 'GUIFactory.php';
require_once 'WinButton.php';
require_once 'WinCheckbox.php';
require_once 'ButtonInterface.php';
require_once 'CheckboxInterface.php';
require_once 'MacButton.php';
require_once 'MacCheckbox.php';
require_once 'Windows.php';
require_once 'Mac.php';
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