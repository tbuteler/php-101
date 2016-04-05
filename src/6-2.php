<?php

class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$person = new Person('Johnny');
echo $person->name; // Fatal error: Cannot access protected property
echo $person->getName(); // Johnny
