<?php

namespace DesignPatterns\Behavioral\Mediator;

/**
 * MediatorInterface 接口为 Mediator 类建立契约
 * 该接口虽非强制，但优于 Liskov 替换原则。
 */
interface MediatorInterface
{
    public function sendResponse($content);

    public function makeRequest();

    public function queryDb();
}