<?php

namespace app\database\models;

use PDOException;

abstract class Model 
{
    private string $fields = '*';
    private string $filters = '';

    public function setFields($fields) 
    {
        $this->fields = $fields;
    }

    public function fetchAll() 
    {
        try {
            $sql = "select {$this->fields} from {$this->table} {$this->filters}";
        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }
}