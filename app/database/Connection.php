<?php

namespace app\database;

use PDO;

class Connection 
{
    private static ?PDO $conn = null;

    public static function connect() 
    {
        if(!self::$conn) {
            self::$conn = new PDO('mysql:host-localhost;dbname=clinica', 'root', '', [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
        }

        return self::$conn;
    }
}