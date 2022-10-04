<?php

declare(strict_types=1);

namespace Patterns\Adapter;

class EmailMessage implements MessageInterface
{
    public function getMessage(): string
    {
        return "This is an email message";
    }
}