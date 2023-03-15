<?php

namespace Strategy\SortingStrategy;
class OrderByName implements OrderInterface
{
    public function sort(array &$datas): void
    {
        usort($datas, function ($x, $y){
            return $x['name'] <=> $y['name'];
        });
    }
}