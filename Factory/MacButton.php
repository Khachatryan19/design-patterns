<?php

namespace Factory;

class MacButton implements ButtonInterface
{
    public function paint(): string
    {
        return <<<TEXT
            <button type="button" onclick="alert('Hello world!')">Mac Button</button>
            TEXT;
    }
}