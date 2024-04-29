<?php

namespace app\database\models;

use app\database\Connection;
use app\helpers\Filters;
use PDO;
use PDOException;

abstract class Model 
{
    private string $fields = '*';
    private string $filters = '';

    public function setFields(string $fields) 
    {
        $this->fields = $fields;
    }

    public function setFielter(Filters $filters) 
    {
        $this->filters = $filters->dump();
    }

    public function fetchAll() 
    {
        try {
            $sql = "select {$this->fields} from {$this->table} {$this->filters}";
            
            $connection = Connection::connect();
            $query = $connection->query($sql);

            return $query->fetchAll(PDO::FETCH_CLASS, get_called_class());
        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }

    public function findBy(string $field, int|string $value) 
    {
        try {
            $sql = "select {$this->fields} from {$this->table} order by desc where {$field} = :{$field}";
            
            $connection = Connection::connect();
            $prepare = $connection->prepare($sql);

            $prepare->execute([$field => $value]);

            return $prepare->fetchObject(get_called_class());
        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }

    public function order(string $field = 'id', string $order = 'desc') 
    {
        try {
            $sql = "select {$this->fields} from {$this->table} order by {$field} {$order} {$this->filters}";
            
            $connection = Connection::connect();
            $query = $connection->query($sql);

            return $query->fetchObject(get_called_class());
        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }

    public function create(array $data) 
    {
        try {
            $sql = "insert into {$this->table} (";
            $sql .= implode(",", array_keys($data)) .") values (:";
            $sql .= implode(",:", array_keys($data)) .")";

            $connec = Connection::connect();
            $prepare = $connec->prepare($sql);
            
            return $prepare->execute($data);

        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }

    public function delete(string $field, int|string $value) 
    {
        try {
            $sql = "delete from {$this->table} where {$field} = :{$field}";
            
            $connection = Connection::connect();
            $prepare = $connection->prepare($sql);

            return $prepare->execute([$field => $value]);
        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }
}