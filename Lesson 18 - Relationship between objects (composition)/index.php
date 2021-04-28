<?php

class Person {
	public function assing_name($name) {
		return "This person name is " . $name;
	}
}

class Show() {
	public $person;
	public $name;

	function __contruct($name) {
		$this->person = new Person();
		$this->name   = $name;
	}

	public function show_name() {
		echo $this->person->assing_name($this->name);
	}
}

$show = new Show("Dayane");
$show->show_name();