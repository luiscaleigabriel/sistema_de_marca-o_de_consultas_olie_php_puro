<?php

namespace app\controllers;

use app\helpers\View;

class LoginController 
{
    public function index() 
    {
        View::render('dashboard/login');
    }
}