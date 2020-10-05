<?php

use App\Poster\FacebookPoster;
use App\Poster\LinkedinPoster;
use App\Poster\SocialNetworkPoster;

require_once 'vendor/autoload.php';

function clientCode(SocialNetworkPoster $poster) {
    $poster->post('HELLO POSTER!!!');
}

clientCode(new FacebookPoster());
clientCode(new LinkedinPoster());