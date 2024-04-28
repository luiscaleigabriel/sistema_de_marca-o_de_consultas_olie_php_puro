<?php

namespace app\core;

use app\helpers\RequestType;
use app\helpers\Uri;
use app\routes\Routes;

class ControllerParams 
{
    public function get(string $router) 
    {
        $uri = Uri::get();
        $method = RequestType::get();
        $routes = Routes::get();

        $router = array_search($router, $routes[$method]);

        $explodeUri = explode('/', $uri);
        $explodeRouter = explode('/', $router);

        $params = [];

        foreach($explodeRouter as $index => $routerSegmet) {
            if($routerSegmet !== $explodeUri[$index]) {
                $params[$index] = $explodeUri[$index];
            }
        }

        return array_values($params);
    }
}