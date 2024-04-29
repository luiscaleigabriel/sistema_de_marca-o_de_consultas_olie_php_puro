<?php

namespace app\database\models;

class User extends Model
{
    protected string $table = 'usuario';
    private readonly int $id;
    private readonly string $nome;
    private readonly string $email;
    private readonly string $senha;
    private readonly ?string $imagem;
    private readonly string $admin;
}