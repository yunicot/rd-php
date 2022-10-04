<?php

declare(strict_types=1);

namespace Patterns\Adapter;

class LogMessage
{
    public function getLogInfo(): array
    {
        return [
            'message' => 'Log message',
            'level' => 'info',
        ];
    }
}