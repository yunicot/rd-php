<?php

$nums = [3, 1, 7, 10, 3, 2, 5, 1, 20, 5, 3, 15];

$max1 = $nums[0];
$max2 = $nums[1];

for ($i = 2; $i < count($nums); $i++) {
    echo 'i: ' . $i . "\n";

    if ($nums[$i] > $max1 || $nums[$i] > $max2) {
        if ($nums[$i] > $max1 && $max1 < $max2) {
            $max1 = $nums[$i];
        } else {
            $max2 = $nums[$i];
        }
    }

    echo 'final i - ' . $i . "\n";
}

echo $max1 * $max2 . "\n";