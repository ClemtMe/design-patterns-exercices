<?php

# TODO: Créer une classe QueryBuilder en utilisant le design pattern Builder

namespace App;

interface QueryBuilderInterface {
    public function from(string $table): self;
    public function getTable(): string;
    public function select(array $champs): self;
    public function getChamps(): array;
    public function where(string $field, string $op, mixed $value): self;
    public function getConditions(): array;
    public function getQueryString(): string;
}