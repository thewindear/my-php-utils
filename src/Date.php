<?php


namespace Utils;


class Date
{
    /**
     * 获取当前的时间 YYYY-MM-DD HH:ii:ss
     * @return false|string
     */
    public static function now()
    {
        return date('Y-m-d H:i:s');
    }

    /**
     * 通过传入的时间戳转为YYYY-MM-DD HH:ii:ss格式的时间
     * @param $timestamp
     * @return false|string
     */
    public static function getDateTimeByTimestamp($timestamp)
    {
        return date('Y-m-d H:i:s', $timestamp);
    }

    /**
     * 获取某年某月有多少天
     * @param $year
     * @param $month
     * @return int
     */
    public static function getMonthDays($year, $month): int
    {
        return cal_days_in_month(CAL_GREGORIAN, $month, $year);
    }
}