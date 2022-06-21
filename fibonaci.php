<?php

// [1, {1], 2}, 3, 5, 8, 13...
function fibonachi(int $n): float {
    if ($n === 1 || $n === 2) {
        return 1;
    }

    $fmin = 1;
    $fmax = 1;
    for ($i = 3; $i < $n; $i++) {
        $temp = $fmin + $fmax;
        $fmin = $fmax;
        $fmax = $temp;
    }

    return $fmin + $fmax;
}

$startTime = microtime(true);
var_dump(fibonachi(100));
var_dump(microtime(true) - $startTime);
