<?php

namespace POmelchenko;

/**
 * Class Second
 * @package POmelchenko
 */
class Arr
{
    /**
     * @param array $array
     * @return int
     */
    public static function rowSum(array $array): int
    {
        return array_sum($array);
    }

    /**
     * @param array $array
     * @return array
     */
    public static function rowsSum(array $array): array
    {
        $res = [];
        foreach ($array as $key => $row) {
            $res[$key] = self::rowSum($row);
        }

        return $res;
    }

    /**
     * @param array $array
     * @return array
     */
    public static function colsSum(array $array): array
    {
        return self::rowsSum(self::rotate($array));
    }

    /**
     * @param array $array
     * @param bool $inverse
     * @return array
     */
    public static function rotate(array $array, $inverse = false): array
    {
        array_unshift($array, null);
        $array = array_map(...$array);

        if ($inverse) {
            $array = array_map('array_reverse', $array);
        }

        return $array;
    }
}
