<?php

namespace Factory;

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


