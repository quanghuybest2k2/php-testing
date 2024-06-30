<?php

namespace Quang\Testing;

class Calculator
{
    public function addNumber(int $number1, int $number2): int
    {
        return $number1 + $number2;
    }
    public function canAddTwoNumber($number1, $number2): bool
    {
        if (is_numeric($number1) && is_numeric($number2)) {
            return true;
        }
        return false;
    }
}
