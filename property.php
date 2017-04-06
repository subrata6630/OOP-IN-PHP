<?php

class Person
{
    public $age;
}


$person = new Person();
$person->age = 32;

$anotherPerson = new Person();
$anotherPerson->age = 45;

var_dump($person->age);
var_dump($anotherPerson->age);
