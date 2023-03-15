<?php

require_once 'GUIFactory.php';
require_once 'MacButton.php';
require_once 'MacCheckbox.php';
require_once 'ButtonInterface.php';
require_once 'CheckboxInterface.php';

class Mac extends GUIFactory {
    public function button(): ButtonInterface
    {
        return new MacButton();
    }

    public function checkbox(): CheckboxInterface
    {
        return new MacCheckbox();
    }
}