<?php

namespace Strategy\SortingStrategy;

class OrderBySurname implements OrderInterface
{
    public function sort(array &$datas): void
    {
        usort($datas, function ($x, $y){
            return $x['surname'] <=> $y['surname'];
        });
    }
}