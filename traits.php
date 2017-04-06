<?php
trait CommonMethods {
    public function getName() {
    	return $this->name;
    }
}

class TestClass {
	use CommonMethods;
	private $name = "test class";
}

class AnotherClass {
	use CommonMethods;
	private $name = "another class";
}

$tc = new TestClass();
var_dump($tc->getName());

$ac = new AnotherClass();
var_dump($ac->getName());
