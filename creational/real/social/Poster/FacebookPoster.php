<?php

namespace App\Poster;

use App\Connector\FacebookConnector;
use App\Connector\SocialNetworkConnector;


class FacebookPoster extends SocialNetworkPoster
{
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector();
    }
}