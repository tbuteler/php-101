<?php

function hello(Person $person)
{
    return "Hello $person->name!";
}

hello('Johnny'); // Catchable fatal error
hello(new Person('Johhny')); // Hello Johnny!

function store(array $values)
{
    //...
}

// As of PHP 7, scalar types: bool, int, float, string
function square(int $values)
{
    //...
}
