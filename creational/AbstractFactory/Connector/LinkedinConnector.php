<?php


namespace Creational\AbstractFactory\Connector;


class LinkedinConnector implements SocialNetworkConnector
{
    public function login(): void
    {
        echo "Linkedin Login" . PHP_EOL;
    }

    public function createPost(string $content): void
    {
        echo $content . PHP_EOL;
    }

    public function logout(): void
    {
        echo "Linkedin Logout" . PHP_EOL;
    }
}