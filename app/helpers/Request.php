<?php

namespace app\helpers;

use Exception;

class Request 
{
    public static function input(string $name) 
    {
        if(array_key_exists($name, $_POST)) {
            return $_POST[$name];
        }

        throw new Exception("O indice {$name} não existe.");
    }

    public static function oll() 
    {
        return $_POST;
    }

}