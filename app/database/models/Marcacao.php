<?php

namespace app\database\models;

class Marcacao extends Model
{
    protected string $table = 'marcacao';
    private readonly int $id;
    private readonly string $datamarcacao;
    private readonly string $atoclinico;
    private readonly string $tipoconsulta;
    private readonly int $idpaciente;
    private readonly int $idmedico;
}