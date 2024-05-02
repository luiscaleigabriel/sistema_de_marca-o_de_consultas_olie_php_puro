<?php

namespace app\database\models;

class Paciente extends Model
{
    protected string $table = 'paciente';
    public readonly int $id;
    public readonly string $nome;
    public readonly string $endereco;
    public readonly string $sexo;
    public readonly string $datanascimento	;
    public readonly string $telefone;
    public readonly string $email;
}