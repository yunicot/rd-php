<?php

namespace App\Model;

use App\Exception\ValidationException;
use Category;

class Trainer extends User
{
    private string $experience = '';
    private ?Category $specialization = null;

    public function setBirthday(\DateTime $birthday): User
    {
        $years = $birthday->diff(new \DateTime())->y;
        if ($years < 16) {
            throw new ValidationException('You should be older than 16');
        }

        return parent::setBirthday($birthday);
    }
}