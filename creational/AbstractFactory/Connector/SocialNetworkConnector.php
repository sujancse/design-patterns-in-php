<?php

namespace Creational\AbstractFactory\Connector;


interface SocialNetworkConnector
{
    public function login(): void;

    public function createPost(string $content): void;

    public function logout(): void;
}