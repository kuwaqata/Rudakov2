<?php

use PHPUnit\Framework\TestCase;
use rudakov\RudakovException;
use rudakov\Lineynoe;

class LineTest extends TestCase
{
    public function testLine()
    {
        $line = new Lineynoe();
        $this->assertEquals([-3], $line->li_solve(3, 9));
        $this->assertEquals([2], $line->li_solve(2, -4));
    }

    public function testLineBad()
    {
        $line = new Lineynoe();
        $this->expectExceptionMessage("Ошибка: уравнения не существует.");
        $this->expectException(RudakovException::class);
        $line->li_solve(0, -7);
        $line->li_solve(0, 2);
    }
}