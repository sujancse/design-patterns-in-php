<?php


namespace Creational\Builder;


interface SqlQueryBuilder
{
    public function select(string $table, array $fields): self;

    public function where(string $field, string $value, string $operator = '='): self;

    public function limit(int $start, int $offset): self;

    public function getSql(): string;
}