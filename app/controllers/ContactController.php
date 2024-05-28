<?php

namespace app\controllers;

use app\helpers\Email;
use app\helpers\Request;
use app\helpers\Session;
use app\helpers\View;
use Exception;

class ContactController 
{
    public function index() 
    {
        View::render('contact');
    }

    public function store() 
    {
        $data = Request::oll();

        if(!empty($data)) {
            Session::flash('success', 'Email enviado com sucesso! Verifique o seu correio electrônico! Obrigado!');
        }else {
            Session::flash('error', 'Ocorreu um erro verifique a sua conexão a internet! ou tente mais tarde');
        }

        Request::to('/contact');

    }
}