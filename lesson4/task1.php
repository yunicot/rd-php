<?php

// x^2 + 4x + 4 = 0
$a = 1;
$b = 4;
$c = -5;

$D = $b ** 2 - 4 * $a * $c;

echo $D . "\n";

if ($D > 0) {
    $x1 = (-$b + sqrt($D)) / 2 * $a;
    $x2 = (-$b - sqrt($D)) / 2 * $a;
    echo sprintf('x1: %d, x2: %d', $x1, $x2);
} elseif ($D === 0) {
    $x = (-$b + sqrt($D)) / 2 * $a;
    echo sprintf('x: %d', $x);
} else {
    echo "Нет корней уравнения";
}

echo "\n";

$n = 5;
$k = 3;

$message = ($n > $k ? 'n > k' : 'n <= k') . "\n";
var_dump($message);