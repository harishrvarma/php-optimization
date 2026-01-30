<?php

require_once __DIR__ . '/Calculator.php'; // Include the Calculator class

use App\Calculator;

// Create Calculator instance
$calc = new Calculator();

$a = 10;
$b = 5;

echo "Add: {$a} + {$b} = " . $calc->add($a, $b) . PHP_EOL;
echo "Sub: {$a} - {$b} = " . $calc->sub($a, $b) . PHP_EOL;
echo "Mul: {$a} * {$b} = " . $calc->mul($a, $b) . PHP_EOL;
echo "Div: {$a} / {$b} = " . $calc->div($a, $b) . PHP_EOL;
