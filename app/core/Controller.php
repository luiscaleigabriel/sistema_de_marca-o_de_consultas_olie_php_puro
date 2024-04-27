<?php

namespace app\core;

use Exception;

class Controller 
{
    public function execute(string $router) 
    {

        if(!\str_contains($router, '@')) {
            throw new Exception("O controller {$router} foi criado de forma incorreta. Esperava @.");
        }

        [$controller, $action] = explode('@', $router);

        $controllerInstance = 'app\\controllers\\' . $controller;

        if(!class_exists($controllerInstance)) {
            throw new Exception("O controller {$controllerInstance} não foi encontrado.");
        }

        $controller = new $controllerInstance;

        if(!method_exists($controller, $action)) {
            throw new Exception("O método {$action} não foi encontrado no controller {$controllerInstance}.");
        }

        call_user_func_array([$controller, $action], []);

    }
}