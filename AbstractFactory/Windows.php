<?php

class WinFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new WinButton();
    }

    public function createCheckbox(): CheckboxInterface
    {
        return new WinCheckboxInterface();
    }
}