<?php

require_once 'CheckboxInterface.php';

class WinCheckbox implements CheckboxInterface
{
    public function paint(): string
    {
        return <<<TEXT
                <form>
                     <input type="checkbox" id="vehicle1" name="Windows" value="Bike">
                     <label for="vehicle1">Windows checkbox</label><br>
                </form>
            TEXT;
    }
}