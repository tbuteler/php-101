<?php

// Creating
$person = new Person;
$person->exists; // false
$person->name = 'Johnny';
$person->save();

// Fetching from database
foreach (Person::all() as $person) {
    $names[] = $person->name;
}

$johnnies = Person::where('name', 'like', 'john%')
                  ->orderBy('surname', 'asc')
                  ->take(10)
                  ->get();

$appleseed = Person::where('nickname', 'Appleseed')->first();
$ptSpeaker = Person::whereIn('country', ['PT', 'BR'])->firstOrCreate();
