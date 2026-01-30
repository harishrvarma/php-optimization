<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    protected Calculator $calculator;
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }
    // Addition
    public function testAdd(): void
    {
        $this->assertEquals(15, $this->calculator->add(10, 5));
    }

    // Subtraction
    public function testSub(): void
    {
        $this->assertEquals(5, $this->calculator->sub(10, 5));
    }

    // Multiplication
    public function testMul(): void
    {
        $this->assertEquals(50, $this->calculator->mul(10, 5));
    }   

    // Division
    public function testDiv(): void
    {
        $this->assertEquals(2, $this->calculator->div(10, 5));
    }

    // Division by zero
    public function testDivByZero(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->calculator->div(10, 0);
    }

    // Negative numbers
    public function testAddNegative(): void
    {
        $this->assertEquals(-5, $this->calculator->add(-10, 5));
    }

    // Floating point numbers
    public function testAddFloat(): void
    {
        $this->assertEquals(5.7, $this->calculator->add(2.5, 3.2));
    }
    

    // Large numbers
    public function testMulLargeNumbers(): void
    {
        $this->assertEquals(10000000000, $this->calculator->mul(100000, 100000));
    }

    // Chained operations
    public function testChainedOperations(): void
    {
        $result = $this->calculator->add(10, 5);
        $result = $this->calculator->mul($result, 2);
        $this->assertEquals(30, $result);
    }

    // Zero operations
    public function testAddZero(): void
    {
        $this->assertEquals(10, $this->calculator->add(10, 0));
    }


    // Commutative property of addition
    public function testCommutativeAdd(): void
    {
        $this->assertEquals(
            $this->calculator->add(10, 5),
            $this->calculator->add(5, 10)
        );
    }

    // Associative property of addition
    public function testAssociativeAdd(): void
    {
        $this->assertEquals(
            $this->calculator->add($this->calculator->add(10, 5), 2),
            $this->calculator->add(10, $this->calculator->add(5, 2))
        );
    }

    // Distributive property of multiplication over addition
    public function testDistributiveProperty(): void
    {
        $a = 2;
        $b = 3;
        $c = 4;
        $leftSide = $this->calculator->mul($a, $this->calculator->add($b, $c));
        $rightSide = $this->calculator->add(
            $this->calculator->mul($a, $b),
            $this->calculator->mul($a, $c)
        );
        $this->assertEquals($leftSide, $rightSide);
    }

    // Identity property of addition
    public function testIdentityAdd(): void
    {
        $this->assertEquals(10, $this->calculator->add(10, 0));
    }

    // Identity property of multiplication
    public function testIdentityMul(): void
    {
        $this->assertEquals(10, $this->calculator->mul(10, 1));
    }

    // Inverse property of addition
    public function testInverseAdd(): void
    {
        $this->assertEquals(0, $this->calculator->add(10, -10));
    }

    // Inverse property of multiplication
    public function testInverseMul(): void
    {
        $this->assertEquals(1, $this->calculator->mul(10, 0.1));
    }
}