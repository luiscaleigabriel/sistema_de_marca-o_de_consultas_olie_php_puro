<?php

namespace app\controllers;

use app\database\models\Marcacao;
use app\database\models\Paciente;
use app\helpers\Request;
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
        
        dd($dadosDoPaciente);

        $idmedico = rand(1, 6);

        $paciente = new Paciente;
        $paciente->create($dadosDoPaciente);

        $idpaciente = $paciente->id;

        $dadosDaMarcacao = [
            'datamarcacao' => Request::input('datamarcacao'),
            'atoclinico' => Request::input('ato'),
            'tipoconsulta' => Request::input('tipoconsulta'),
            'idpaciente' => $idpaciente,
            'idmedico' => $idmedico
        ];

        $marcação = new Marcacao;
        $marcação->create($dadosDaMarcacao);
        
    }
}