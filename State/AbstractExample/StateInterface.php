<?php

namespace State\AbstractExample;
interface StateInterface
{
    public function operation(Context $context) : string;
}