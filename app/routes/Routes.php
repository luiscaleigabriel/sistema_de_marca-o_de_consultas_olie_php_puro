<?php

namespace app\routes;

class Routes 
{
    public static function get(): array 
    {
        return [
            'get' => [
                '/' => 'HomeController@index',
                '/consult' => 'ConsultController@index',
                '/contact' => 'ContactController@index',
                '/login' => 'LoginController@index',
                '/logout' => 'LoginController@logout',
                '/dash' => 'DashboardController@index',
                '/consultlist' => 'ConsultController@show',
                '/consultlist/[0-9]+/delete' => 'ConsultController@delete',
                '/doctors' => 'DoctorController@index',
                '/doctor/delete/[0-9]+' => 'DoctorController@delete',
                '/doctorAdd' => 'DoctorController@store',
                '/users' => 'UserController@index',
                '/useradd' => 'UserController@store',
                '/user/delete/[0-9]+' => 'UserController@delete',
                ],
            'post' => [
                '/feedback/paciente' => 'FeedBackController@create',
                '/consult' => 'ConsultController@store',
                '/contact' => 'ContactController@store',
                '/login' => 'LoginController@store',
                '/doctorAdd' => 'DoctorController@create',
                '/usercreate' => 'UserController@create',
                ]
        ];
    }
}