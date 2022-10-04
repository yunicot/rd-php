<?php

declare(strict_types=1);

namespace Patterns\ChainOfResponsibility;

class Authentication extends AbstractHandler
{
    public function handle(string $request): string
    {
        $request .= ' -> Authentication';

        return $this->nextHandler?->handle($request) ?? $request;
    }
}