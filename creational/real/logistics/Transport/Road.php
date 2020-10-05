<?php


namespace App\Transport;


class Road implements Transport
{
    public function deliver(string $goods)
    {
        echo $goods . PHP_EOL;
    }
}