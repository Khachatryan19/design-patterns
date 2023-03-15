<?php

namespace State\AbstractExample;
class StateOne implements StateInterface
{
    private static ?StateOne $instance = null;

    private function __construct(){}

    public static function getInstance(){
        if (self::$instance === null){
            self::$instance = new self();
        }

        return self::$instance;
    }
    public function operation(Context $context) : string
    {
        $result = 'State1 -> State2' . PHP_EOL;

        $context->setState(StateTwo::getInstance());

        return $result;
    }
}