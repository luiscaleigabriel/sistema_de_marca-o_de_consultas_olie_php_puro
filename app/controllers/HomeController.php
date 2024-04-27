<?php

namespace app\controllers;

use app\helpers\View;

class HomeController 
{
    public function index() 
    {
        View::render('home');
    }
}