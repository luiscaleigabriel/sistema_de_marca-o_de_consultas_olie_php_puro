<?php

namespace app\core;

use app\helpers\RequestType;
use app\helpers\Uri;
use app\routes\Routes;

class RoutersFilter 
{
    private string $uri;
    private string $method;
    private array $routes;

    public function __construct()
    {
        $this->uri = Uri::get();
        $this->method = RequestType::get();
        $this->routes = Routes::get();
    }

    public function simpleRouter() 
    {
        if(array_key_exists($this->uri, $this->routes[$this->method])) {
            return $this->routes[$this->method][$this->uri];
        }

        return null;
    }

    public function dynamicRouter() 
    {
        foreach($this->routes[$this->method] as $index => $route) {
            $regex = str_replace('/', '\/', ltrim($index, '/'));

            if($index !== '/' && preg_match("/^$regex$/", trim($this->uri, '/'))) {
                $routerRegisteredFound = $route;
                break;
            }else {
                $routerRegisteredFound = null;
            }
        }

        return $routerRegisteredFound;
    }

    public function get() 
    {
        $route = $this->simpleRouter();

        if($route) {
            return $route;
        }

        $route = $this->dynamicRouter();

        if($route) {
            return $route;
        }

        return 'NotFoundController@index';
    }
}