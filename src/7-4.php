<?php

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function kittens()
    {
        return $this->hasMany(Kitten::class);
    }
}

class Kitten extends Model
{
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}

$person->kittens; // Collection of Kitten models
$kittens = Kitten::with('person')->get(); // Kittens with owners eager-loaded
