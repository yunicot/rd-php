<?php

declare(strict_types=1);

namespace App\Controller;

class DeveloperController
{
    public function getDeveloper(array $params): string
    {
        var_dump($params);
        return '';
    }
}