<?php


use Creational\FactoryMethod\Logistics\Logistics;
use Creational\FactoryMethod\Logistics\RoadLogistics;

require_once 'vendor/autoload.php';

function clientCode(Logistics $logistics) {
    $logistics->deliverProduct('GOODS...');
}

clientCode(new RoadLogistics());
