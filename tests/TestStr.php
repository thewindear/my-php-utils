<?php


use PHPUnit\Framework\TestCase;

class TestStr extends TestCase
{
    public function testRandomStr()
    {
        $randomStrLen = 20;
        $str = Utils\Str::randomStr($randomStrLen);
        $this->assertEquals(strlen($str), $randomStrLen, "生成的字符串不是{$randomStrLen}个字符");
    }
}
