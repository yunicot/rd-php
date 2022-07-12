<?php

// 3, 1, 7, 5, 2, 10, 4
// 1, 2, 3, 5, 7, 10, 4
// 1, 2, 3, 5, 7, 10, 4
function insertionSort(array $arr): array
{
    $count = count($arr);
    for ($i = 1; $i < $count; $i++) {
        if ($arr[$i] >= $arr[$i-1]) {
            continue;
        }

        $temp = $arr[$i];
        $j = $i - 1;
        while ($j > 0) {
            if ($arr[$i] >= $arr[$j]) {
                break;
            }

            $j--;
        }

        for ($k = $i - 1; $k >= $j; $k--) {
            $arr[$k + 1] = $arr[$k];
        }

        $arr[$j] = $temp;
    }

    return $arr;
}

function generateArray($size): array
{
    $arr = [];
    for ($i = 0; $i < $size; $i++) {
        $arr[$i] = mt_rand(1, 10 ** 6);
    }

    return $arr;
}

$sizes = [100, 1000, 10000, 100000];
foreach ($sizes as $size) {
    $arr = generateArray($size);

    $from = microtime(true);
    insertionSort($arr);
    echo sprintf("%d - %s \n", $size, microtime(true) - $from);
}
