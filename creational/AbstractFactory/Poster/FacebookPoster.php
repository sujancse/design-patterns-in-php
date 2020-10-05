<?php

namespace Creational\AbstractFactory\Poster;


use Creational\AbstractFactory\Connector\SocialNetworkConnector;
use Creational\AbstractFactory\Connector\FacebookConnector;

class FacebookPoster extends SocialNetworkPoster
{
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector();
    }
}