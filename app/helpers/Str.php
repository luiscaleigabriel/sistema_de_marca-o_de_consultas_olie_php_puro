<?php

namespace app\helpers;

class Str 
{
    public static function str(string $string, int $quntity, string $delimitador = '...') 
    {
        if($quntity > strlen($string)) {
            $string = substr($string, 0, $quntity);
        } else {
            $string = substr($string, 0, $quntity) . $delimitador;
        }

        return $string;
    }
}