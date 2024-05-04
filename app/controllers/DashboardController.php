<?php

namespace app\controllers;

use app\helpers\Request;
use app\helpers\Session;
use app\helpers\View;

class DashboardController 
{
    public function index() 
    {
        if(Session::has('admin')) {
            View::render('dashboard/dash');
        }else {
            Request::to('/');
        }
    }
}