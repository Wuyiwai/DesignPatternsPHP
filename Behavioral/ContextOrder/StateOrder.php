<?php


namespace DesignPatterns\Behavioral\ContextOrder;


abstract class StateOrder
{
    private $details;

    /**
     * @var StateOrder $state
     */
    protected static $state;

    abstract protected function done();

    protected function setStatus(string $status)
    {
        $this->details['status'] = $status;
        $this->details['updatedTime'] = time();
    }

    protected function getStatus(): string
    {
        return $this->details['status'];
    }
}