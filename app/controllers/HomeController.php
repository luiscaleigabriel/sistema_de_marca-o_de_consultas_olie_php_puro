<?php

namespace app\controllers;

use app\database\models\FeedBack;
use app\helpers\Filters;
use app\helpers\View;

class HomeController 
{
    public function index() 
    {
        $filter = new Filters;
        $filter->limit(4);

        $feedbacks = new FeedBack;
        $feedbacks->setFielter($filter);
        $feedbacks = $feedbacks->order();

       View::render('home', ['feedbacks' => $feedbacks]);
    }
}