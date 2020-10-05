<?php


namespace Creational\FactoryMethod\Transport;


interface Transport
{
    public function deliver(string $goods);
}