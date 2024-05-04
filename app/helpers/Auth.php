<?php

namespace app\helpers;

use app\database\models\User;

class Auth 
{
    public static function loged(User $user) 
    {
        Session::set('admin', [
            'id' => $user->id,
            'nome' => $user->nome
        ]);

        Request::to('/dash');
    }

    public static function logout() 
    {
        Session::removeAll();
        Request::to('/');
    }
}