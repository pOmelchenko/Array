<?php

namespace POmelchenko;

/**
 * Class Second
 * @package POmelchenko
 */
class Second
{
    /**
     * @param array $array
     * @return int
     */
    public static function arrayRowSum(array $array): int
    {
        return array_sum($array);
    }

    /**
     * @param array $array
     * @return array
     */
    public static function arrayRowsSum(array $array): array
    {
        $res = [];
        foreach ($array as $key => $row) {
            $res[$key] = self::arrayRowSum($row);
        }

        return $res;
    }

    /**
     * @param array $array
     * @return array
     */
    public static function arrayColsSum(array $array): array
    {
        return self::arrayRowsSum(self::rotateArray($array));
    }

    /**
     * @param array $array
     * @param bool $inverse
     * @return array
     */
    public static function rotateArray(array $array, $inverse = false): array
    {
        array_unshift($array, null);
        $array = array_map(...$array);

        if ($inverse) {
            $array = array_map('array_reverse', $array);
        }

        return $array;
    }
}
