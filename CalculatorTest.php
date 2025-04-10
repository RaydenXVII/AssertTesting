<?php

use PHPUnit\Framework\TestCase;

require_once "Calculator.php";

class CalculatorTest extends TestCase
{
    public function testTambah()
    {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->tambah(2, 3));
    }

    public function testKurang()
    {
        $calculator = new Calculator();
        $this->assertEquals(1, $calculator->kurang(3, 2));
    }

    public function testKali()
    {
        $calculator = new Calculator();
        $this->assertEquals(6, $calculator->kali(2, 3));
    }
    public function testBagi()
    {
        $calculator = new Calculator();
        $this->assertEquals(2, $calculator->bagi(6, 3));
    }
    public function testBagiDenganNol()
    {
        $this->expectException(InvalidArgumentException::class);

        $calculator = new Calculator();
        $calculator->bagi(0, 1);
    }
}