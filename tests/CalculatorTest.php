<?php

use Quang\Testing\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddTwoNumber()
    {
        $calculator = new Calculator();

        $this->assertSame(300, $calculator->addNumber(100, 200));
    }
    public function testCanAddTwoNumber()
    {
        $calculator = new Calculator();

        $this->assertTrue($calculator->canAddTwoNumber(4, 5));
        $this->assertNotTrue($calculator->canAddTwoNumber("Huy", 3));
    }
}
