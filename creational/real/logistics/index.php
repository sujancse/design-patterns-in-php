<?php

use App\Logistics\Logistics;
use App\Logistics\RoadLogistics;

require_once 'vendor/autoload.php';

function clientCode(Logistics $logistics) {
    $logistics->deliverProduct('GOODS...');
}

clientCode(new RoadLogistics());
