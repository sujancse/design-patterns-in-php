<?php


namespace App\Logistics;


use App\Transport\Road;
use App\Transport\Transport;

class RoadLogistics extends Logistics
{
    public function createTransport(): Transport
    {
        return new Road();
    }
}