<?php

declare(strict_types=1);

namespace Patterns\Decorator;

class LoggerQueryDecorator implements QueryInterface
{
    public function __construct(
        private QueryInterface $decorated,
    ) {
    }


    public function getQuery(): string
    {
        echo "INFO: LoggerQueryDecorator::getQuery()\n";
        $query = $this->decorated->getQuery();
        echo "INFO: LoggerQueryDecorator::getQuery() - query: $query\n";
        return $query;
    }
}