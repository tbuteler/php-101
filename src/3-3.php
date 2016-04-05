<?php

$array = ['foo' => 'bar', 'hey' => 'ho'];
array_keys($array); // ['foo', 'hey']
array_values($array); // ['bar', 'ho']

array_key_exists('foo', $array); // true
isset($array['bar']); // false

array_flip($array); // ['bar' => 'foo', 'ho' => 'hey']
array_search('bar', $array); // foo

array_merge($array, ['foo' => 'baz']); // ['foo' => 'baz', 'hey' => 'ho']
