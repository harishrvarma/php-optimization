<?php

require_once __DIR__ . '/Calculator.php'; // Include the Calculator class

use App\Calculator;

class Verify
{
    protected Calculator $calculator;
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function verifyAdd(float $a, float $b, float|int $expected): bool
    {
        return $this->calculator->add($a, $b) === $expected;
    }

    public function verifySub(float $a, float $b, float|int $expected): bool
    {
        return $this->calculator->sub($a, $b) === $expected;
    }

    public function verifyMul(float $a, float $b, float|int $expected): bool
    {
        return $this->calculator->mul($a, $b) === $expected;
    }

    public function verifyDiv(float $a, float $b, float|int $expected): bool
    {
        return $this->calculator->div($a, $b) === $expected;
    }


}


// Create Calculator instance
$calc = new Calculator();

// Create Verify instance
$verify = new Verify($calc);

$verifyResults = [
    'Addition' => $verify->verifyAdd(10, 5, 15),
    'Subtraction' => $verify->verifySub(10, 5, 5),
    'Multiplication' => $verify->verifyMul(10, 5, 50),
    'Division' => $verify->verifyDiv(10, 5, 2),
];

foreach ($verifyResults as $operation => $result) {
    echo "{$operation} verification: " . ($result ? "Passed" : "Failed") . nl2br(PHP_EOL);
}
