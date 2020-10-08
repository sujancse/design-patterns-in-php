<?php


namespace Creational\Singleton;


class Logger extends Singleton
{
    private $fileHandle;

    protected function __construct()
    {
        parent::__construct();
        $this->fileHandle = fopen('php://stdout', 'w');
    }

    public function writeLog(string $message)
    {
        $date = date('Y-m-d');
        fwrite($this->fileHandle, "$date: $message\n");
    }

    public static function log(string $message)
    {
        $logger = static::getInstance();
        $logger->writeLog($message);
    }
}