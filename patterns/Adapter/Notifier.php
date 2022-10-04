<?php

declare(strict_types=1);

namespace Patterns\Adapter;

class Notifier
{
    public function notify(MessageInterface $message): void
    {
        echo $message->getMessage() . "\n";
    }
}