<?php

namespace app\database\models;

class Medico extends Model
{
    protected string $table = 'medico';
    private readonly int $id;
    private readonly string $nome;
    private readonly string $email;
    private readonly string $especialidade;
}