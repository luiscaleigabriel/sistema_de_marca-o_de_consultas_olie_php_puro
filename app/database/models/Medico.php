<?php

namespace app\database\models;

class Medico extends Model
{
    protected string $table = 'medico';
    public readonly int $id;
    public readonly string $nome;
    public readonly string $email;
    public readonly string $especialidade;
}