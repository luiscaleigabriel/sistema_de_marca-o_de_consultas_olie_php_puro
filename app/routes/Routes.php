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
                '/register' => 'RegisterController@index'
                ],
            'post' => [
                '/feedback/paciente' => 'FeedBackController@create'
                ]
        ];
    }
}