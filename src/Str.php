<?php

namespace Utils;

class Str
{
    /**
     * 随机生成一个字符串0-9a-zA-Z
     * @param int $len
     * @return string
     */
    public static function randomStr($len = 16)
    {
        $strs = '123456789qazxswedcvfrtgbnhyujmkiolpQAZXSWEDCVFRTGBNHYUJMKIOLP';
        $strs = str_shuffle($strs);
        return substr($strs, 0, $len);
    }

}