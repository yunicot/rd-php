<?php

declare(strict_types=1);

namespace Patterns\Observer;

class EventDispatcher
{
    /**
     * @var array<string, array<callable>>
     */
    private array $listeners = [];

    public function addListener(string $eventName, callable $listener): void
    {
        $this->listeners[$eventName][] = $listener;
    }

    public function dispatch(string $eventName, array $data = []): void
    {
        if (isset($this->listeners[$eventName])) {
            foreach ($this->listeners[$eventName] as $listener) {
                $listener($data);
            }
        }
    }
}