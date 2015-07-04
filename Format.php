<?php

namespace ts\base;

/**
 * @author Haisen <thirsight@gmail.com>
 * @since 1.0
 */
class Format
{
    public static function asTimePeriod($value)
    {
        if (preg_match('#^(\d+)-(\d+)$#', $value, $m)) {
            $m[1] = date('H:i', strtotime('today') + $m[1]);
            $m[2] = date('H:i', strtotime('today') + $m[2]);
            return $m[1] . '-' . $m[2];
        }
        return $value;
    }
}
