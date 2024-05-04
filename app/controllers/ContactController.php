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
        $email = new Email;

        try {
            $send = $email->from($data['email'], $data['nome'])
            ->to('clinicagirassol@gmail.com', 'Clínica Girassol')
            ->message($data['mensagem'])
            ->template('contact',[
                'name' => $data['nome'],
                'subject' => $data['assunto']
            ])
            ->subject($data['assunto'])
            ->send();
            if($send) {
                Session::flash('success', 'Email enviado com sucesso! Verifique o seu email! Obrigado!');
            }else {
                Session::flash('error', 'Ocorreu um erro verifique a sua conexão a internet! ou tente mais tarde');
            }
        } catch (Exception $e) {
            Session::flash('error', 'Ocorreu um erro verifique a sua conexão a internet! ou tente mais tarde');
        }

        Request::to('/contact');

    }
}