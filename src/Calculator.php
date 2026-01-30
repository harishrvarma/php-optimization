<?php

namespace App;

class Calculator
{
    // Addition
    public function add(float $a, float $b): float|int
    {
        return $a + $b;
    }

    // Subtraction
    public function sub(float $a, float $b): float|int
    {
        return $a - $b;
    }

    // Multiplication
    public function mul(float $a, float $b): float|int
    {
        return $a * $b;
    }

    // Division
    public function div(float $a, float $b): float|int
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Division by zero is not allowed.");
        }
        return $a / $b;
    }
}
