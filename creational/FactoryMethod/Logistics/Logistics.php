<?php

namespace Creational\FactoryMethod\Logistics;


use Creational\FactoryMethod\Transport\Transport;

abstract class Logistics
{
    abstract public function createTransport(): Transport;

    public function deliverProduct(string $goods)
    {
        $transport = $this->createTransport();
        $transport->deliver($goods);
    }
}