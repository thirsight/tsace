<?php

namespace ts\base;

/**
 * @author Haisen <thirsight@gmail.com>
 * @since 1.0
 */
class Filter
{
    /**
     * 过滤掉字符串中所有的空格、换行
     *
     * @param $str
     * @return mixed
     */
    public static function stripBlank($str)
    {
        return preg_replace('#\s+#', '', trim($str));
    }

    /**
     * 合并字符串中多余的空格、换行
     *
     * @param $str
     * @return mixed
     */
    public static function mergeBlank($str)
    {
        return preg_replace('#(\s)+#', '$1', trim($str));
    }
}
