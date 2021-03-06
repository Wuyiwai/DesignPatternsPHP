<?php


namespace DesignPatterns\Structural\DataMapper;


class StorageAdapter
{
    private $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function find(int $id)
    {
        return $this->data[$id] ?? null;
    }
}