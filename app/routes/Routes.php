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
                '/contact' => 'ContactController@index',
                '/login' => 'LoginController@index',
                '/dash' => 'DashboardController@index'
                ],
            'post' => [
                '/feedback/paciente' => 'FeedBackController@create',
                '/consult' => 'ConsultController@store',
                '/contact' => 'ContactController@store',
                '/login' => 'LoginController@store'
                ]
        ];
    }
}