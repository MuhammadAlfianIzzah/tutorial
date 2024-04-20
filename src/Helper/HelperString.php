<?php

namespace Alfianizzah\Tutorial\Helper;

class HelperString
{
    public static function helloWorld()
    {
        return "hello world";
    }
    public static function stringToArray($string)
    {
        return explode(" ", $string);
    }
}
