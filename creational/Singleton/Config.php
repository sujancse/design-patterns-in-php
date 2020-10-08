<?php


namespace Creational\Singleton;


class Config extends Singleton
{
    private static $hashmap = [];

    public function getValue(string $key): string
    {
        return self::$hashmap[$key];
    }

    public function setValue(string $key, string $value): void
    {
        self::$hashmap[$key] = $value;
    }
}