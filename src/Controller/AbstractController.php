<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
    protected const TEMPLATE_EXT = ['php', 'html'];

    public function render(string $templateName, array $vars = []): string
    {
        $basePath = $_SERVER['DOCUMENT_ROOT'] . '/templates/';
        foreach (self::TEMPLATE_EXT as $ext) {
            $fileName = $basePath . $templateName . '.' . $ext;
            if (file_exists($fileName)) {
                $stream = file_get_contents($fileName);

                return $this->replaceVars($stream, $vars);
            }
        }

        throw new \RuntimeException('Template is not found');
    }

    private function replaceVars(string $fileContent, array $vars): string
    {
        foreach ($vars as $var => $val) {
            $fileContent = str_replace('{{ ' . $var . ' }}', (string) $val, $fileContent);
        }

        return $fileContent;
    }
}