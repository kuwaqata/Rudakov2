<?php

use PHPUnit\Framework\TestCase;
use rudakov\RudakovException;
use rudakov\Kvadratnoe;

class SquareTest extends TestCase
{
    public function testSquare()
    {
        $square = new Kvadratnoe();
        $this->assertEquals([-4.0, 4.0], $square->solve(-1, 0, 16));
        $this->assertEquals([-3], $square->solve(0, 3, 9));
        $this->assertEquals([-3], $square->solve(1, 6, 9));
    }

    public function testSquareBad()
    {
        $squareEx = new Kvadratnoe();
        $this->expectExceptionMessage("Ошибка: уравнение не имеет корней.");
        $this->expectException(RudakovException::class);
        $squareEx->solve(14, 2, 1);
        $squareEx->solve(4, 2, 1);
    }
}