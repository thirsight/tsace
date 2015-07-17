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

    /**
     * @param array $rows
     * @param array $columns
     */
    public static function getRowsColumns(Array &$rows, Array $columns)
    {
        foreach ($rows as $key => $row) {
            foreach ($row as $field => $value) {
                if (!in_array($field, $columns)) {
                    unset($rows[$key][$field]);
                }
            }
        }
    }
}
