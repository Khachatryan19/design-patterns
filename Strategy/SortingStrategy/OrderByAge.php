<?php

namespace Strategy\SortingStrategy;
class OrderByAge implements OrderInterface
{
    public function sort(array &$datas): void
    {
        usort($datas, function ($x, $y){
            return $x['age'] <=> $y['age'];
        });
    }
}