<?php

namespace app\controllers;

use app\helpers\View;

class NotFoundController 
{
    public function index() 
    {
        View::render('404');
    }
}