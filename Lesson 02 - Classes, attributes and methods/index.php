<?php

class Person {
    public $name;
    public $age;

    public function talk() {
        echo "My name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

$person1 = new Person();

$person1->name = "Dayane";
$person1->age  = 25;
$person1->talk();