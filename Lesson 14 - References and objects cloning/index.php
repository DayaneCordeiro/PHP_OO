<?php

class Person {
	public $age;

	// Magic method - will be initialized whenever we use the reserved word clone in a instance of this class
	public function __clone() {
		echo "Cloning objects";
	}
}

$person = new Person();
$person->age = 25;

// Creating a reference to the $person object
$person2 = $person;
$person->age = 35;

echo $person2->age; // Will return 35

// Creating a clone of the $person object
$person2 = clone $person;
$person2->age = 35;

echo $person->age; // Will return 25
echo $person2->age; // Will return 35