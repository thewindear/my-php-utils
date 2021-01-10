<?php


use PHPUnit\Framework\TestCase;

class TestStr extends TestCase
{
    public function testRandomStr()
    {
        $str = Utils\Str::randomStr();
        $this->assertEquals(strlen($str), 16, '生成的字符串不是16个字符');
    }
}
