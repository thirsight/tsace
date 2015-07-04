<?php

namespace ts\base;

/**
 * @author Haisen <thirsight@gmail.com>
 * @since 1.0
 */
class Filter
{
    public static function stripBlank($value)
    {
        return preg_replace('#\s+#', '', $value);
    }

    public static function mergeBlank($value)
    {
        return preg_replace('#(\s)+#', '$1', $value);
    }
}
