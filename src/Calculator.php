<?php

namespace App;

class Calculator
{
    // Addition
    public function add($a, $b)
    {
        return $a + $b;
    }

    // Subtraction
    public function sub($a, $b)
    {
        return $a - $b;
    }

    // Multiplication
    public function mul($a, $b)
    {
        return $a * $b;
    }

    // Division
    public function div($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Division by zero is not allowed.");
        }
        return $a / $b;
    }
}
