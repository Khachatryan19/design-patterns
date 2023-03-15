<?php

require_once 'CheckboxInterface.php';

class MacCheckbox implements CheckboxInterface
{
    public function paint(): string
    {
        return <<<TEXT
                <form>
                     <input type="checkbox" id="vehicle1" name="Windows" value="Bike">
                     <label for="vehicle1">Mac checkbox</label><br>
                </form>
            TEXT;
    }
}