<?php

function square($num)
{
    return $num*$num;
}

square(2); // 4

function hello($name = 'world')
{
    return "Hello $name!";
}

hello(); // Hello world!
hello('Johnny'); // Hello Johnny!
