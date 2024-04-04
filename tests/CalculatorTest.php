<?php

use Quang\Testing\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCanAddTwoNumber()
    {
        $calculator = new Calculator();
        $sum = $calculator->addNumber(100, 200);

        $this->assertSame(300, $sum);
    }
}
