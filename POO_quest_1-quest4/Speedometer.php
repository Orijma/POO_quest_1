<?php

class Speedometer 
{
    public const MILES = 0.621371;

    public static function convertKMToMiles($km)
    {
       return $km * self::MILES;
 
    }

}