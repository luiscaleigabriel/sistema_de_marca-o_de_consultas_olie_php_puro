<?php

namespace app\database\models;

class FeedBack extends Model
{
    protected string $table = 'feedback';
    public readonly int $id;
    public readonly string $nome;
    public readonly string $email;
    public readonly string $mensagem;
}