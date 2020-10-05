<?php

require_once 'vendor/autoload.php';

use Creational\FactoryMethod\Logistics\Logistics;
use Creational\FactoryMethod\Logistics\RoadLogistics;


function clientCode(Logistics $logistics) {
    $logistics->deliverProduct('GOODS...');
}

clientCode(new RoadLogistics());
