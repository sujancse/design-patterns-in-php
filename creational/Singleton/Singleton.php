<?php


namespace Creational\Singleton;


class Singleton
{
    private static $instances = [];

    protected function __construct() {}

    protected function __clone() {}

    /**
     * @throws \Exception
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    public static function getInstance()
    {
        $subclass = static::class;

        echo $subclass;

        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }

        return self::$instances[$subclass];
    }
}