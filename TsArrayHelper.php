<?php

namespace ts\base;

/**
 * @author Haisen <thirsight@gmail.com>
 * @since 1.0
 */
class TsArrayHelper
{
    /**
     * @param array $array
     */
    public static function unserialize(Array &$array)
    {
        foreach ($array as $key => $value) {
            if (TsStringHelper::isSerialized($value)) {
                $array[$key] = unserialize($value);
            }
        }
    }
}
