<?php

namespace app\helpers;

class Session 
{
    public static function set(string $index, array $value) 
    {
        $_SESSION[$index] = $value;
    }

    public static function has(string $index) 
    {
        return array_key_exists($index, $_SESSION);
    } 

    public static function get(string $index) 
    {
        if(self::has($index)) {
            return $_SESSION[$index];
        }
    }

    public static function remove(string $index) 
    {
        if(self::has($index)) {
            unset($_SESSION[$index]);
        }
    }

    public static function removeAll() 
    {
        session_reset();
        session_destroy();
    }

    public static function flash(string $index, mixed $value) 
    {
        $_SESSION['__flash'][$index] = $value;
    }

    public static function flashMessage(string $index) 
    {
        if(array_key_exists($index, $_SESSION['__flash'])) {
            return $_SESSION['__flash'][$index];
        }
    }

    public static function flashHas(string $index) 
    {
        return array_key_exists($index, $_SESSION['__flash']);
    }

    public static function flashRemove() 
    {
        if(self::has('__flash') && RequestType::get() === 'get') {
            unset($_SESSION['__flash']);
        }
    }

}