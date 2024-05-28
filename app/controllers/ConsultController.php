<?php

namespace app\controllers;

use app\database\models\Marcacao;
use app\database\models\Paciente;
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

        $pacienteT = new Paciente;
        $createdP = $pacienteT->create($dadosDoPaciente);

        $paciente = $pacienteT->fetchAll();

        foreach($paciente as $paciente) {
            if($paciente->email == $dadosDoPaciente['email']) {
                $paciente = $paciente;
                break;
            }
        }

        $idpaciente = $paciente->id;

        $dadosDaMarcacao = [
            'datamarcacao' => Request::input('datamarcacao') .' '. Request::input('time'),
            'atoclinico' => Request::input('ato'),
            'tipoconsulta' => Request::input('tipoconsulta'),
            'idpaciente' => $idpaciente,
            'idmedico' => $idmedico
        ];

        $marcação = new Marcacao;
        $createdM = $marcação->create($dadosDaMarcacao);

        if($createdP && $createdM) {
            Session::flash('success', 'Consulta marcada com sucesso! Enviamos lhe um email de confirmação. Verifique o seu correio electrônico! Obrigado!');
        }else {
            Session::flash('error', 'Ocorreu um erro verifique a sua conexão a internet! ou tente mais tarde');
            $pacienteT->delete('email', $dadosDoPaciente['email']);
            $marcação->delete('idpaciente', $idpaciente);
        }

        Request::to('/consult');
        
    }

    public function show() 
    {
        if(Session::has('admin')) {
            $marcacao = new Marcacao;
            $marcacao = $marcacao->fetchAll();

            $paciente = new Paciente;
            $paciente = $paciente->fetchAll();

            View::render('dashboard/consultlist', [
                'marcacoes' => $marcacao,
                'paciente' => $paciente
            ]);
        }else {
            Request::to('/');
        }
    }

    public function delete(int $id) 
    {
        $id = $id;
        $marcacao = new Marcacao;
        $marcacao = $marcacao->where('id', $id);

        $idpaciente = $marcacao[0]->idpaciente;

        unset($marcacao);

        $paciente = new Paciente;
        $pacienteDeleteded = $paciente->delete('id', $idpaciente);

        $marcacao = new Marcacao;
        $marcacaoDeleteded = $marcacao->delete('id', $id);

        if($pacienteDeleteded && $marcacaoDeleteded) {
            Session::flash('success', 'Consulta excluída com sucesso!');
            Request::to('/consultlist');
        }else {
            Session::flash('error', 'Falha ao excluir!');
            Request::to('/consultlist');
        }
    }
}