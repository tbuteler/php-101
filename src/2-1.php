<?php

$string = 'Hello'.' '.'world!'; // Hello world!
$string = 'Hello'; // Hello
$string .= ' world!'; // Hello world!

$string = str_replace('Hello', 'Hey', $string); // Hey world!
$length = strlen($string); // 10
$index = strpos($string, 'world'); // 4

$array = explode(' ', $string); // ['Hey', 'world!'];
