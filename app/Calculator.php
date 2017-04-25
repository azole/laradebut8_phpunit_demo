<?php

namespace App;

class Calculator
{
    protected $result = 0;

    public function getResult()
    {
        return $this->result;
    }

    public function add()
    {
        $this->calculateAll(func_get_args(), '+');
    }

    public function subtract()
    {
        $this->calculateAll(func_get_args(), '-');
    }

    protected function calculateAll(array $numbers, $symbol): void
    {
        foreach ($numbers as $num) {
            if (!is_numeric($num)) {
                throw new \InvalidArgumentException('Invalid Argument!!');
            }
            switch ($symbol)
            {
                case '+':
                    $this->result += $num;
                    break;
                case '-':
                    $this->result -= $num;
                    break;
            }
        }
    }
}