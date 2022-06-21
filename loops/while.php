<?php

$a = [];
$n = 24;
// 6 = 2 * 3
$current = 2;
while ($current <= $n / 2) {
    if ($n % $current === 0) {
        $a[] = $current;
    }

    $current++;
}

echo implode(', ', $a) . "\n";