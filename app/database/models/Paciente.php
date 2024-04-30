<?php

namespace app\database\models;

class Paciente extends Model
{
    protected string $table = 'paciente';
    private readonly int $id;
    private readonly string $nome;
    private readonly string $endereco;
    private readonly string $sexo;
    private readonly string $datanascimento	;
    private readonly string $telefone;
    private readonly string $email;
}