<?php

namespace App\Model;

class Trainer extends User
{
    private string $experience = '';
    private ?Category $specialization = null;
}