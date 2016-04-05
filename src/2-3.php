<?php

$string = 'HELLO WORLD!!!';
preg_match('/world/', $string); // false
preg_match('/world/i', $string); // true
preg_match('/world!{1,2}$/i', $string); // false
preg_match('/world!+$/i', $string); // true
preg_match('/world/i', $string, $matches); // Stores matches in new variable

$string = 'Hello world!';
$string = preg_replace('/world!?/', "Johnny!", $string); // Hello Johnny!
