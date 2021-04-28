<?php

class Person {
	private $name;
	// private $data = array();

	public function __set($name, $value) {
		$this->name = $value;
		// $this->data[$name] = $value;
	}

	public function __get($name) {
		return $this->name;
		//return $this->data[$name];
	}

	public function __tostring() {
		echo "Trying to print the object.";
	}

	public function __invoke() {
		return "Object as function";
	}
}

$person       = new Person();
$person->name = "Dayane";

// $person       = new Person();
// $person->name = "Dayane";
// $person->age  = 25;
// person->sex   = 'F';

// echo $person->name . "<br>";
// echo $person->age . "<br>";
// echo $person->sex . "<br>";

echo $person->name;

// Calling the magic method __tostring:
echo $person;

// Calling the magic method __invoke:
echo $person();