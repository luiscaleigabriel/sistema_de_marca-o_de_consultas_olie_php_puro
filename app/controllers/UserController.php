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
        if(Session::has('admin')) {
            View::render('dashboard/createuser');
        }else {
            Request::to('/');
        }
    }

    public function create() 
    {
        $user = new User;
        $data = Request::oll();
        $data['senha'] = password_hash($data['senha'], PASSWORD_DEFAULT);
        $user->create($data);
        Request::to('/users');
    }

    public function delete(int $id) 
    {
        if(Session::has('admin')) {
            $user = new User;
            $user->delete('id', $id);
            Request::to('/users');
        }else {
            Request::to('/');
        }

    }
}