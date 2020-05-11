<?php
class Calculator
{
 
    public function add($a, $b): float
    {
        return $a + $b;
    }

    public function multiply($a, $b): float
    {
        return $a * $b;
    }

    public function division($a, $b): float
    {
        return $a / $b;
    }
 
    public function espar($a): int
    {
        if ($a%2==0){
         return 1;
        }
        else{
         return 0;
        }
    }
}
