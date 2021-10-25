<?php

namespace Src;

/*
Please be aware that helper classes are an anti-pattern, especially when developing in DDD.
However, I've provided a class like thos to test it only for the required exercise.
*/
final class Flatten
{
    public static function flat($array)
    {
        return array_reduce($array, function ($accounted, $item) {
            return array_merge($accounted, is_array($item) ? self::flat($item) : [$item]);
        }, []);
    }
}