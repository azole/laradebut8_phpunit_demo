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
        if (!is_numeric($num)) {
            throw new \InvalidArgumentException('Invalid Argument!!');
        }
        $this->result += $num;
    }
}