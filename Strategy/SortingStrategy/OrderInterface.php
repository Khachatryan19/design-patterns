<?php

namespace Strategy\SortingStrategy;

interface OrderInterface
{
    public function sort(array &$datas) : void;
}