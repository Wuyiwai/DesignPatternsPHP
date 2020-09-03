<?php


namespace DesignPatterns\Structural\Bridge;


class HelloWorldService extends Service
{
    public function get()
    {
        return $this->implemention->format("Hello World");
    }
}