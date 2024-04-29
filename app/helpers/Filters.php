<?php

namespace app\helpers;

class Filters 
{
    private array $filters = [];

    public function where(string $field, string $operator, mixed $value, string $logic = '') 
    {
        $formater = '';

        if (is_array($value)) {
            $formater = "('" . implode("','", $value)."')";
        }else if(is_string($value)) {
            $formater = "'{$value}'";
        }else if(is_bool($value)) {
            $formater = $value ? 1 : 0;
        }else {
            $formater = $value;
        }

        $value = strip_tags($formater);

        $this->filters['where'][] = "{$field} {$operator} {$value} {$logic}";
    }

    public function limit(int $limit) 
    {
        $this->filters['limit'] = " limit {$limit}";
    }

    public function dump() 
    {
        $filter = !empty($this->filters['where']) ? ' where ' . implode(' ', $this->filters['where']) : '';
        $filter .= $this->filters['limit'] ?? '';

        return $filter;
    }

}