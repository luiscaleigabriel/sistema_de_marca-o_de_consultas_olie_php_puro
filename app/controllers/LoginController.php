<?php

namespace app\controllers;

use app\database\models\User;
use app\helpers\Auth;
use app\helpers\Request;
use app\helpers\Session;
use app\helpers\View;

class LoginController 
{
    public function index() 
    {
        View::render('dashboard/login');
    }

    public function store() 
    {
        $data = [
            'email' => strip_tags(Request::input('email')),
            'senha' => strip_tags(Request::input('senha'))
        ];

        if(!empty($data['email']) && !empty($data['senha'])) {
            $user = new User;
            $user = $user->where('email', $data['email']);

            if(!$user) {
                Session::flash('error', 'Usuário ou senha inválidos');
                Request::to('/login');
            }

            if(!password_verify($data['senha'], $user[0]->senha)) {
                Session::flash('error', 'Usuário ou senha inválidos');
                Request::to('/login');
            }else {
                Auth::loged($user[0]);
            }
        }else {
            Session::flash('error', 'Preencha o campo emaiel/senha');
            Request::to('/login');
        }

    }

    public function logout() 
    {
        Auth::logout();
    }
}