<?php

namespace ts\base;

/**
 * @author Haisen <thirsight@gmail.com>
 * @since 1.0
 */
class Format
{
    /**
     * @param $str
     * @return string
     */
    public static function asTimePeriod($str)
    {
        if (preg_match('#^(\d+)-(\d+)$#', $str, $m)) {
            $m[1] = date('H:i', strtotime('today') + $m[1]);
            $m[2] = date('H:i', strtotime('today') + $m[2]);
            return $m[1] . '-' . $m[2];
        }
        return $str;
    }
}
