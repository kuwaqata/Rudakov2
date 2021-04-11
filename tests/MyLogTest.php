<?php

use rudakov\MyLog;
use PHPUnit\Framework\TestCase;

class MyLogTest extends TestCase
{
	public function testLog() 
	{
        $this->expectOutputString("Rudakov231");
        MyLog::log("Rudakov231");
        MyLog::write();
    }
	
	public function testInst() 
	{
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }

}