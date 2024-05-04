<?php

namespace app\database\models;

class User extends Model
{
    protected string $table = 'usuario';
    public readonly int $id;
    public readonly string $nome;
    public readonly string $email;
    public readonly string $senha;
}