<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * 创建 Webservice 服务类实现 RenderableInterface。
 * 该类将在后面为装饰者实现数据的输入。
 */
class Webservice implements RenderableInterface
{
    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function renderData(): string
    {
        return $this->data;
    }
}