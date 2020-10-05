<?php

namespace App\Connector;


class FacebookConnector implements SocialNetworkConnector
{
    public function login(): void
    {
        echo "Facebook Login" . PHP_EOL;
    }

    public function createPost(string $content): void
    {
        echo $content . PHP_EOL;
    }

    public function logout(): void
    {
        echo "Facebook Logout" . PHP_EOL;
    }
}