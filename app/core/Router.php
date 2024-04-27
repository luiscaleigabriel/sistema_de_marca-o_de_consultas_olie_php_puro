<?php

namespace app\core;

class Router 
{
    public static function run() 
    {
        $routerRegistered = new RoutersFilter;
        $router = $routerRegistered->get(); 

        $controller = new Controller;

        dd($router);
    }
}