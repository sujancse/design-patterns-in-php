<?php


namespace App\Transport;


interface Transport
{
    public function deliver(string $goods);
}