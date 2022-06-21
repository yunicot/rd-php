<?php

$nums = [3, 1, 7, 10, 3, 2, 5, 1, 20, 5, 3, 15];

$max1 = $nums[0];
$max2 = $nums[1];

$i = 2;
while ($i < count($nums)) {
    if ($nums[$i] > $max1 || $nums[$i] > $max2) {
        if ($nums[$i] > $max1 && $max1 < $max2) {
            $max1 = $nums[$i];
        } else {
            $max2 = $nums[$i];
        }
    }

    $i++;
}

echo $max1 * $max2 . "\n";