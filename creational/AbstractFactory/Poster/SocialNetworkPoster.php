<?php

namespace Creational\AbstractFactory\Poster;


use Creational\AbstractFactory\Connector\SocialNetworkConnector;

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post(string $content): void
    {
        $network = $this->getSocialNetwork();
        $network->login();
        $network->createPost($content);
        $network->logout();
    }
}