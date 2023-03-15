<?php

namespace State\AbstractExample;
class StateTwo implements StateInterface
{
    private static ?StateTwo $instance = null;

    private function __construct(){}

    public static function getInstance(){
        if (self::$instance === null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function operation(Context $context) : string
    {
        $result = 'State2 -> State3' . PHP_EOL;

        $context->setState(StateThree::getInstance());

        return $result;
    }
}