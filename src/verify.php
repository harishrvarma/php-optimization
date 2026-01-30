<?php

require_once __DIR__ . '/Calculator.php'; // Include the Calculator class

use App\Calculator;

class Verify
{
    public function __construct(protected Calculator $calculator)
    {
    }

    public function verifyAdd(float $a, float $b, float $expected): bool
    {
        return $this->calculator->add($a, $b) === $expected;
    }

    public function verifySub(float $a, float $b, float $expected): bool
    {
        return $this->calculator->sub($a, $b) === $expected;
    }

    public function verifyMul(float $a, float $b, float $expected): bool
    {
        return $this->calculator->mul($a, $b) === $expected;
    }

    public function verifyDiv(float $a, float $b, float $expected): bool
    {
        return $this->calculator->div($a, $b) === $expected;
    }


}


// Create Calculator instance
$calc = new Calculator();

// Create Verify instance
$verify = new Verify($calc);

$a = 10;
$b = 5;

$verifyResults = [
    'Addition' => $verify->verifyAdd($a, $b, 15),
    'Subtraction' => $verify->verifySub($a, $b, 5),
    'Multiplication' => $verify->verifyMul($a, $b, 50),
    'Division' => $verify->verifyDiv($a, $b, 2),
];

foreach ($verifyResults as $operation => $result) {
    echo $operation . ' verification: ' . ($result ? "Passed" : "Failed") . nl2br(PHP_EOL);
}
