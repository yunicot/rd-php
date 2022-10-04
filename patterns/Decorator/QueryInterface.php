<?php

declare(strict_types=1);

namespace Patterns\Decorator;

interface QueryInterface
{
    public function getQuery(): string;
}