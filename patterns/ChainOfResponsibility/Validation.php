<?php

declare(strict_types=1);

namespace Patterns\ChainOfResponsibility;

class Validation extends AbstractHandler
{
    public function handle(string $request): string
    {
        $request .= ' -> Validation';

        return $this->nextHandler?->handle($request) ?? $request;
    }
}