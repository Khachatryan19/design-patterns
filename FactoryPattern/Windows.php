<?php

require_once 'GUIFactory.php';
require_once 'WinButton.php';
require_once 'WinCheckbox.php';
require_once 'ButtonInterface.php';
require_once 'CheckboxInterface.php';

class Windows extends GUIFactory {
    public function button(): ButtonInterface
    {
        return new WinButton();
    }

    public function checkbox(): CheckboxInterface
    {
        return new WinCheckbox();
    }
}


