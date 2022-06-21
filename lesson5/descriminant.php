<?php

declare(strict_types=1);

$a = 1;
$b = 3;
$c = -4;

function calcD(float $a, float $b = 0, float $c = 0): float
{
    return $b ** 2 - 4 * $a * $c;
}

function calcX(float $a, float $b, float $D): array
{
    $x1 = (-$b + sqrt($D)) / 2 * $a;
    $x2 = (-$b - sqrt($D)) / 2 * $a;

    return [$x1, $x2];
}

$D = calcD($a, $b, $c);
echo sprintf("D: %d \n", $D);

[$x1, $x2] = calcX($a, $b, $D);
//=============
//$xs = calcX($a, $b, $D);
//$x1 = $xs[0];
//$x2 = $xs[1];

echo sprintf("x1: %d, x2: %d \n", $x1, $x2);
//var_export($xs);

//var_dump($);