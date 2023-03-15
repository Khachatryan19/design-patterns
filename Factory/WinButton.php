<?php

namespace Factory;

class WinButton implements ButtonInterface {
    public function paint(): string
    {
        return <<<TEXT
            <button type="button" onclick="alert('Hello world!')">Windows Button</button>
            TEXT;
    }
}