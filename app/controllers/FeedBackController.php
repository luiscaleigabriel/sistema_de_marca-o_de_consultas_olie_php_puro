<?php

namespace app\controllers;

use app\database\models\FeedBack;
use app\helpers\Request;
use app\helpers\Session;

class FeedBackController 
{
    public function create() 
    {
        $data = Request::oll();

        $feedback = new FeedBack;
        $created = $feedback->create($data);

        if($created) {
            Session::flash('success', 'Feedback enviado com sucesso!. Obrigado pelo seu comentário');
            Request::to('/#clientes');
        } else {
            Session::flash('error', 'Erro ao enviar o Feedback porfavor tente novamente depois de alguns minutos!');
            Request::to('/#clientes');
        }

    }
}