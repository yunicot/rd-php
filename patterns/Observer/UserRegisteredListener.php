<?php

declare(strict_types=1);

namespace Patterns\Observer;

class UserRegisteredListener
{
    public function __invoke(array $data): void
    {
        echo 'UserRegisteredListener invoked with data ' . json_encode($data, JSON_THROW_ON_ERROR) . "\n";
    }
}