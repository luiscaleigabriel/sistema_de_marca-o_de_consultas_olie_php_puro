<?php

namespace app\controllers;

use app\database\models\Marcacao;
use app\database\models\Medico;
use app\database\models\User;
use app\helpers\Request;
use app\helpers\Session;
use app\helpers\View;

class DashboardController 
{
    public function index() 
    {
        if(Session::has('admin')) {
            $consults = new Marcacao;
            $consults = $consults->fetchAll();

            $doctors = new Medico;
            $doctors = $doctors->fetchAll();

            $users = new User;
            $users = $users->fetchAll();

            View::render('dashboard/dash', [
                'consults' => $consults,
                'doctors' => $doctors,
                'users' => $users
            ]);
        }else {
            Request::to('/');
        }
    }

    
}