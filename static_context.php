<?php

class Person
{
    public static $count;

    public static function getCount()
    {
        return self::$count;
    }
}


Person::$count = 34;
var_dump(Person::$count);

$person = new Person();
var_dump($person->getCount());

Person::$count = 23;
var_dump(Person::$count);

var_dump($person->getCount());


$anotherPerson = new Person();
var_dump($anotherPerson->getCount());
