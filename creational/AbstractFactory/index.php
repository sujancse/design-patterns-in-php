<?php

use Creational\AbstractFactory\Poster\FacebookPoster;
use Creational\AbstractFactory\Poster\LinkedinPoster;
use Creational\AbstractFactory\Poster\SocialNetworkPoster;

require_once 'vendor/autoload.php';

function clientCode(SocialNetworkPoster $poster) {
    $poster->post('HELLO POSTER!!!');
}

clientCode(new FacebookPoster());
clientCode(new LinkedinPoster());