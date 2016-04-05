<?php

$person = Person::create([
    'name'     => 'Johnny',
    'surname'  => 'Chapman',
    'nickname' => 'Appleseed',
]);

$person->kittens()->create([
    'name' => 'Yakko',
]);

$person->kittens()->saveMany([
    new Kitten(['name' => 'Wakko']),
    new Kitten(['name' => 'Dot']),
]);
