<?php

namespace app\controllers;

use app\database\models\Marcacao;
use app\database\models\Paciente;
use app\helpers\Email;
use app\helpers\Request;
use app\helpers\Session;
use app\helpers\View;

class ConsultController 
{
    public function index() 
    {
        View::render('consult');
    }

    public function store() 
    {
        $dadosDoPaciente = [
            'nome' => Request::input('nome'),
            'endereco' => Request::input('endereco'),
            'sexo' => Request::input('sexo'),
            'datanascimento' => Request::input('datanascimento'),
            'telefone' => Request::input('telefone'),
            'email' => Request::input('email')
        ];

        $idmedico = rand(1, 6);

        $paciente = new Paciente;
        $createdP = $paciente->create($dadosDoPaciente);

        $paciente = $paciente->fetchAll();

        foreach($paciente as $paciente) {
            if($paciente->email == $dadosDoPaciente['email']) {
                $paciente = $paciente;
                break;
            }
        }

        $idpaciente = $paciente->id;

        $dadosDaMarcacao = [
            'datamarcacao' => Request::input('datamarcacao'),
            'atoclinico' => Request::input('ato'),
            'tipoconsulta' => Request::input('tipoconsulta'),
            'idpaciente' => $idpaciente,
            'idmedico' => $idmedico
        ];

        $marcação = new Marcacao;
        $createdM = $marcação->create($dadosDaMarcacao);

        if($createdP && $createdM) {
            $data = [
                'nome' => Request::input('nome'),
                'datamarcacao' => Request::input('datamarcacao')
            ];
            $email = new Email;
            $send = $email->from('clinicagirassol@gmail.com', 'Clínica Girrassol')
            ->to($dadosDoPaciente['email'], $dadosDoPaciente['nome'])
            ->message('')
            ->template('email',[
                'name' => $data['nome'],
                'date' => $data['datamarcacao']
            ])
            ->subject('')
            ->send();
    
            if($send) {
                Session::flash('success', 'Consulta marcada com sucesso! Verifique o seu email! Obrigado!');
            }else {
                Session::flash('error', 'Ocorreu um erro verifique a sua conexão a internet! ou tente mais tarde');
            }
        }else {
            Session::flash('error', 'Ocorreu um erro verifique a sua conexão a internet! ou tente mais tarde');
        }

        Request::to('/consult');
        
    }
}