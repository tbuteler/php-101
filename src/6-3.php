<?php

class Person
{
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString()
    {
        return "$this->firstName $this->lastName";
    }
}

$person = new Person('Johhny', 'Appleseed');
echo $person; // Johnny Appleseed
