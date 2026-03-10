<?php

namespace App;

class LitteralQueryBuilder extends MySQLQueryBuilder implements QueryBuilderInterface
{

    public function getQueryString(): string
    {
        $query = "Je selectionne les champs " . implode(', ', $this->champs);
        $query .= " depuis la table " . $this->table;

        if (count($this->conditions) > 0) {
            $query .= " où ";
        }

        foreach ($this->conditions as $condition) {
            $query .= $condition[0] ." ". $condition[1] ." ". $condition[2];
            if(next($this->conditions)) {
                $query .= " et ";
            }
        }

        return $query . ".";
    }
}