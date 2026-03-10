<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface
{
    protected string $table;
    protected array $champs;
    protected array $conditions;

    public function __construct()
    {
        $this->table = '';
        $this->champs = [];
        $this->conditions = [];
    }

    public function from(string $table): QueryBuilderInterface
    {
        $this->table = $table;
        return $this;
    }

    public function getTable(): string
    {
        return $this->table;
    }

    public function select(array $champs): QueryBuilderInterface
    {
        $this->champs = $champs;
        return $this;
    }

    public function getChamps(): array
    {
        return $this->champs;
    }

    public function where(string $field, string $op, mixed $value): QueryBuilderInterface
    {
        $this->conditions[] = [$field, $op, $value];
        return $this;
    }

    public function getConditions(): array
    {
        return $this->conditions;
    }

    public function getQueryString(): string
    {
        $query = "SELECT " . implode(', ', $this->champs);
        $query .= " FROM " . $this->table;

        if (count($this->conditions) > 0) {
            $query .= " WHERE ";
        }

        foreach ($this->conditions as $condition) {
            $query .= $condition[0] ." ". $condition[1] ." ". $condition[2];
            if(next($this->conditions)) {
                $query .= " AND ";
            }
        }

        return $query . ";";
    }
}