<?php

declare(strict_types=1);

namespace Patterns\Decorator;

class UserQuery implements QueryInterface
{
    public function getQuery(): string
    {
        return 'SELECT * FROM users';
    }
}