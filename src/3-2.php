<?php

$array = [1, 2, 3, 4];
array_sum($array); // 10
array_product($array); // 24

// Map using anonymous function
$array = array_map(function ($num) {
    return $num*$num;
}, $array); // [1, 4, 9, 16]

array_map('sqrt', $array); // [1, 2, 3, 4]

array_filter($array, function ($num) {
    return $num >= 3;
}); // [3, 4];

array_unique([1, 1, 2, 2, 3, 3]); // [1, 2, 3]
