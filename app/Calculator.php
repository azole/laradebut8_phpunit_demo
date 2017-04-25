<?php

namespace App;

class Calculator
{
    protected $result = 0;

    public function getResult()
    {
        return $this->result;
    }

    public function add($num)
    {
        $this->result += $num;
    }
}