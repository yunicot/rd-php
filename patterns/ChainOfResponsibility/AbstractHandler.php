<?php

declare(strict_types=1);

namespace Patterns\ChainOfResponsibility;

abstract class AbstractHandler implements HandlerInterface
{
    protected ?HandlerInterface $nextHandler = null;

    public function setNext(?HandlerInterface $handler): HandlerInterface
    {
        $this->nextHandler = $handler;

        return $handler;
    }
}