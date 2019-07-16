<?php

namespace local\lib\helpers;

class TTL
{
    const MINUTE = 1;

    const HOUR = 60;

    const DAY = 1440;

    const WEEK = 10080;

    const MONTH = 43200;

    const YEAR = 525600;

    /**
     * переводит количество секунд в минуты
     * @param $seconds
     * @return float|int
     */
    public static function sec2min($seconds)
    {
        return ($seconds) / 60;
    }
}