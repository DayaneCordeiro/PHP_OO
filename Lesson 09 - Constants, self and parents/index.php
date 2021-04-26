<?php

class Person {
    const name = "Dayane";

    public function showName() {
        echo self::name;
    }
}

class Dayane extends Person {
    const name = "Cordeiro";

    public function showName() {
        echo parent::name; // will return Dayane
        echo " ";
        echo self::name;   // will return Cordeiro
    }
}

$dayane = new Dayane();
$dayane->showName();