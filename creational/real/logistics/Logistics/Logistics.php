<?php

namespace App\Logistics;

use App\Transport\Transport;

abstract class Logistics
{
    abstract public function createTransport(): Transport;

    public function deliverProduct(string $goods)
    {
        $transport = $this->createTransport();
        $transport->deliver($goods);
    }
}