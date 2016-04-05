<?php

$name = 'Johnny';
$string = 'Hello $name!'; // Hello $name!
$string = "Hello $name!"; // Hello Johnny!
$string = "Hello {$name}!"; // Hello Johnny!
$string = "Johnny \"Appleseed\" Chapman"; // Johnny "Appleseed" Chapman

$person = new Person('Johnny');
$string = "Hello $person->name!"; // Hello Johnny!
