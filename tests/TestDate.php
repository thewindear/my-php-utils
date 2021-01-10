<?php

use PHPUnit\Framework\TestCase;

class TestDate extends TestCase
{
    public function testNow()
    {
        date_default_timezone_set('PRC');
        $nowDateTime = \Utils\Date::now();
        $this->assertEquals($nowDateTime, date('Y-m-d H:i:s'), '时间不相等');
    }
}