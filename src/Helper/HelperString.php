<?php

namespace Alfianizzah\Tutorial;

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
