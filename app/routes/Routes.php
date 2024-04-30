<?php

namespace app\routes;

class Routes 
{
    public static function get(): array 
    {
        return [
            'get' => [
                '/' => 'HomeController@index',
                '/user/edit/[0-9]+' => 'UserController@edit',
                '/consult' => 'ConsultController@index',
                '/register' => 'RegisterController@index',
                '/login' => 'LoginController@index'
                ],
            'post' => [
                '/feedback/paciente' => 'FeedBackController@create',
                '/consult' => 'ConsultController@store',
                ]
        ];
    }
}