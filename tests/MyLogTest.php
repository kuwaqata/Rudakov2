<?php

use rudakov\MyLog;
use PHPUnit\Framework\TestCase;

class MyLogTest extends TestCase
{
	
	public function testInst() 
	{
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }

    public function testWriteLog() 
	{
        $this->expectOutputString("Rudakov231");
        MyLog::log("Rudakov231");
        MyLog::write();
    }
    
}