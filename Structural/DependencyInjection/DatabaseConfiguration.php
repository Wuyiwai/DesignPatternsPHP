<?php

namespace DesignPatterns\Structural\DependencyInjection;

class DatabaseConfiguration
{
    private $host;
    private $port;
    private $userName;
    private $password;

    public function __construct(string $host, int $port, string $userName, string $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->userName = $userName;
        $this->password = $password;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}