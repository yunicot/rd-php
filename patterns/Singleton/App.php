<?php

namespace Patterns\Singleton;

class App
{
    private static ?App $instance = null;
    private function __construct()
    {
    }

    public function __serialize(): array
    {
        throw new \Exception('Cannot serialize singleton');
    }

    private function __clone(): void
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance(): App
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}