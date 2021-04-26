<?php

interface Crud {
	public function create();
	public function read();
	public function update();
	public function delete();
}

class News implements Crud {
	public function create() {
		// Logic to create a new.
	}

	public function read() {
		// Logic to read a new.
	}

	public function update() {
		// Logic to update a new.
	}

	public function delete() {
		// Logic to delete a new.
	}
}