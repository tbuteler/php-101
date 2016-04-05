<?php

$array = array(1, 2, 3); // Required notation prior to PHP 5.4
$array = [1, 2, 3]; // Keys are zero-based incremental integers
$array[0]; // 1

$associative = ['foo' => 'bar', 'hey' => 'ho'];
$associative['foo']; // bar

$multidimensional = [
    'numbers' => [1, 2, 3],
    'associative' => [
        'foo' => 'bar',
        'hey' => 'ho',
        'baz' => [4, 5, 6]
    ],
];
$multidimensional['associative']['hey']; // ho
