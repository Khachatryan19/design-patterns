<?php

namespace Strategy;
class StrategyGMail implements StrategyInterface
{
    public function send(): string
    {
        return <<<MessageContext
    Message sent by <span style='color: red'>gmail.com</span>
MessageContext;
    }
}