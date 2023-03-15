<?php

namespace Strategy\SortingStrategy;
class Context
{
    private OrderInterface $strategy;

    public function __construct(OrderInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function produce(&$array) : void
    {
        $this->strategy->sort($array);
    }

    /**
     * @param OrderInterface $strategy
     */
    public function setStrategy(OrderInterface $strategy): void
    {
        $this->strategy = $strategy;
    }
}