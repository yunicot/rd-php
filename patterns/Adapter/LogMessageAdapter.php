<?php

declare(strict_types=1);

namespace Patterns\Adapter;

class LogMessageAdapter implements MessageInterface
{
    public function __construct(
        private LogMessage $logMessage
    ) {
    }

    public function getMessage(): string
    {
        return sprintf(
            'Log message: %s, level: %s',
            $this->logMessage->getLogInfo()['message'],
            $this->logMessage->getLogInfo()['level']
        );
    }
}