<?php

namespace app\controllers;

use app\database\models\User;
use app\helpers\Request;
use app\helpers\Session;
use app\helpers\View;

class UserController 
{
    public function index() 
    {
        if(Session::has('admin')) {
            $user = new User;
            $users = $user->fetchAll();
            View::render('dashboard/users', ['users' => $users]);
        }else {
            Request::to('/');
        }
    }

    public function store() 
    {
        View::render('dashboard/createuser');
    }

    public function create() 
    {
        $user = new User;
        $user->create(Request::oll());
        Request::to('/users');
    }

    public function delete(int $id) 
    {
        $user = new User;
        $user->delete('id', $id);
        Request::to('/users');
    }
}