<?php

require_once 'ButtonInterface.php';
require_once 'CheckboxInterface.php';

abstract class GUIFactory
{
    abstract public function button(): ButtonInterface;

    abstract public function checkbox(): CheckboxInterface;

    public function paint()
    {
        $button = $this->button();
        $checkbox = $this->checkbox();

        echo $button->paint();
        echo $checkbox->paint();
    }
}