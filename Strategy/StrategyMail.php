<?php

namespace Strategy;
class StrategyMail implements StrategyInterface
{
    public function send(): string
    {
        return <<<MessageContext
    Message sent by <span style="color: blue">mail.ru</span>
MessageContext;
    }
}