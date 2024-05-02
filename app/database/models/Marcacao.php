<?php

namespace app\database\models;

class Marcacao extends Model
{
    protected string $table = 'marcacao';
    public readonly int $id;
    public readonly string $datamarcacao;
    public readonly string $atoclinico;
    public readonly string $tipoconsulta;
    public readonly int $idpaciente;
    public readonly int $idmedico;
}