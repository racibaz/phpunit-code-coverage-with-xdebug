<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public $a, $b;

    public $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
        $this->a = null;
        $this->b = null;
    }

    /**
     * @dataProvider addProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $this->calculator->add($a, $b));
    }

    public function addProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2]
        ];
    }


    /**
     * @dataProvider subtractProvider
     */
    public function testSubtract($a, $b, $expected)
    {
        $this->assertEquals($expected, $this->calculator->subtract($a, $b));
    }

    public function subtractProvider()
    {
        return [
            [0, 0, 0],
            [1, 0, 1],
            [2, 1, 1],
            [3, 1, 2]
        ];
    }


    /**
     * @dataProvider multiplyProvider
     */
    public function testMultiply($a, $b, $expected)
    {
        $this->assertEquals($expected, $this->calculator->multiply($a, $b));
    }

    public function multiplyProvider()
    {
        return [
            [0, 0, 0],
            [1, 0, 0],
            [2, 1, 2],
            [3, 3, 9]
        ];
    }


    /**
     * @dataProvider divideProvider
     */
    public function testDivide($a, $b, $expected)
    {
        $this->assertEquals($expected, $this->calculator->divide($a, $b));
    }

    public function divideProvider()
    {
        return [
            [5, 1, 5],
            [10, 10, 1],
            [2, 1, 2],
            [3, 3, 1]
        ];
    }

}
