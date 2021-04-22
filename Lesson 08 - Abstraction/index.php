<?php

class vehicle {
    public $model;
    public $color;
    public $year;

    public function drive() {
        echo "Driving";
    }
    public function stop() {
        echo "Stopping";
    }
}

class Car extends vehicle {
    public function openDoors() {
        echo "Opening doors";
    }
}
class Motorcycle extends vehicle {
    public function rideMotocycle() {
        echo "Riding the motorcycle";
    }
}

$car = new Car();
$car->model = "Clio";
$car->color = "Grey";
$car->year = 2018;
$car->drive();
echo "<br>";
$car->openDoors();

var_dump($car);

$motocycle = new Motocycle();
$motocycle->model = "Fan";
$motocycle->color = "Blue";
$motocycle->year = 2015;
$motocycle->stop();
echo "<br>";
$motocycle->rideMotocycle();

var_dump($motocycle);