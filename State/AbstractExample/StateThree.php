<?php

namespace State\AbstractExample;

class StateThree implements StateInterface
{
    private static ?StateThree $instance = null;

    private function __construct(){}

    public static function getInstance(){
        if (self::$instance === null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function operation(Context $context) : string
    {
        $result = 'State3 -> State1' . PHP_EOL;

        $context->setState(StateOne::getInstance());

        return $result;
    }
}