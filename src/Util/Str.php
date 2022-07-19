<?php

declare(strict_types=1);

namespace App\Util;

class Str
{
    public static function random(int $length): string
    {
        $result = '';
        $seq = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890';
        for ($i = 0; $i < $length; $i++) {
            $result .= $seq[mt_rand(0, mb_strlen($seq) - 1)];
        }

        return $result;
    }
}