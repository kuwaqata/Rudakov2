<?php

use PHPUnit\Framework\TestCase;
use rudakov\MyLog;

class MyLogTest extends TestCase
{

    public function testWrite()
    {
        $this->assertEquals('', MyLog::write());
        $this->assertEquals('', MyLog::write(4586));
        $this->assertEquals('', MyLog::write("Rudakov"));

    }

    public function testMyLog()
    {
        $this->assertEquals('', MyLog::log("Rudakov"));
        $this->assertEquals('', MyLog::log(4648));
        $this->assertEquals('', MyLog::log(false));
    }

    public function testMyLogEx()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('', MyLog::log());
        $this->assertEquals('', MyLog::log(null));
    }
}