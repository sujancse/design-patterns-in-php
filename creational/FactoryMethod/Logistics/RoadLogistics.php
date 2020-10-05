<?php


namespace Creational\FactoryMethod\Logistics;

use Creational\FactoryMethod\Transport\Transport;
use Creational\FactoryMethod\Transport\Road;

class RoadLogistics extends Logistics
{
    public function createTransport(): Transport
    {
        return new Road();
    }
}