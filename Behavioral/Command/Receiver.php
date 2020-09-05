<?php


namespace DesignPatterns\Behavioral\Command;

/**
 * 接收方是特定的服务，有自己的 contract ，只能是具体的实例。
 */
class Receiver
{
    private $enableDate = false;
    private $output = [];

    public function write(string $str)
    {
        if ($this->enableDate) {
            $str .= ' [' . date('Y-m-d') . ']';
        }
        $this->output[] = $str;
    }

    public function getOutput(): string
    {
        return join('\n', $this->output);
    }

    public function enableDate()
    {
        $this->enableDate = true;
    }

    public function disableDate()
    {
        $this->enableDate = false;
    }
}