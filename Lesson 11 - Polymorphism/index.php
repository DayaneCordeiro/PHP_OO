<?php

abstract class Animal {
	public abstract function walk();
}

class Horse extends Animal {
	public function walk() {
		echo "The horse is walking";
	}
}

class Cat extends Animal {
	public function walk() {
		echo "The cat is walking";
	}
}