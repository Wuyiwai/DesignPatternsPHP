<?php


namespace DesignPatterns\Structural\DependencyInjection;


class DatabaseConnection
{
    private $configuration;

    public function __construct(DatabaseConfiguration $config)
    {
        $this->configuration = $config;
    }

    public function getDsn(): string
    {
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUserName(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort(),
        );
    }
}