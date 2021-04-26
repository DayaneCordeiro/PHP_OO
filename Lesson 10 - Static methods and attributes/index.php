<?php

class Login {
	public static $user;

	// Static method
	public static function verifyLogin() {
		echo "The user " . self::$user . " is logged in.";
	}

	// Non static method
	public function loggoff() {
		echo "The user logged off.";
	}
}

// Static attribute and method - we don't instatiate
Login::$user = "admin";
Login::verifyLogin();

// Non static function - we have to instantiate
$login = new Login();
$login->loggoff();