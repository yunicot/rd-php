<?php

$n = 24;
$a = [];
for ($current = 2; $current <= $n / 2; $current++) {
    if ($current === 8) {
        continue;
    }
    if ($n % $current === 0) {
        $a[] = $current;
    }
}

echo implode(', ', $a) . "\n";