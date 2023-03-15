<?php

namespace Factory;

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