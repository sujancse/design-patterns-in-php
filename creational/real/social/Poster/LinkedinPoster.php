<?php


namespace App\Poster;


use App\Connector\LinkedinConnector;
use App\Connector\SocialNetworkConnector;

class LinkedinPoster extends SocialNetworkPoster
{
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedinConnector();
    }
}