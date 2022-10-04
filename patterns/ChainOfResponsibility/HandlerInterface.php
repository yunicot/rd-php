<?php

declare(strict_types=1);

namespace Patterns\ChainOfResponsibility;

interface HandlerInterface
{
    public function setNext(HandlerInterface $handler): HandlerInterface;

    public function handle(string $request): string;
}