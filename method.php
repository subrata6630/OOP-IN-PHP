<?php

class Person
{
    public $age;

    public function getAge()
    {
        return $this->age;
    }
}


$person = new Person();
$person->age = 32;

$anotherPerson = new Person();
$anotherPerson->age = 45;

var_dump($person->getAge());
var_dump($anotherPerson->getAge());
