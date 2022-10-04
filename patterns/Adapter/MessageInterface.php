<?php

declare(strict_types=1);

namespace Patterns\Adapter;

interface MessageInterface
{
    public function getMessage(): string;
}