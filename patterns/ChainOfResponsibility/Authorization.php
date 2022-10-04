<?php

declare(strict_types=1);

namespace Patterns\ChainOfResponsibility;

class Authorization extends AbstractHandler
{
    public function handle(string $request): string
    {
        $request .= ' -> Authorization';

        return $this->nextHandler?->handle($request) ?? $request;
    }
}