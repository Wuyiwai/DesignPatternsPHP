<?php


namespace DesignPatterns\Structural\Bridge;


abstract class Service
{
    protected $implemention;

    public function __construct(FormatterInterface $printer)
    {
        $this->implemention = $printer;
    }

    public function setImplemention(FormatterInterface $printer)
    {
        $this->implemention = $printer;
    }

    abstract public function get();
}