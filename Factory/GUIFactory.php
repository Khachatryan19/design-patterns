<?php

namespace Factory;

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