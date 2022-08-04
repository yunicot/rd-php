<?php

declare(strict_types=1);

namespace App\Controller;

class ContactController extends AbstractController
{
    public function getContactPage(): string
    {
        return $this->render('form', [
            'number' => 5,
        ]);
    }

    public function sendContactForm(): string
    {
        die();
    }
}