<?php


namespace Creational\AbstractFactory\Poster;


use Creational\AbstractFactory\Connector\SocialNetworkConnector;
use Creational\AbstractFactory\Connector\LinkedinConnector;

class LinkedinPoster extends SocialNetworkPoster
{
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedinConnector();
    }
}