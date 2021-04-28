<?php

class Newsletter {
	public function registerEmail($email) {
		// throw a exception
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			throw new  Exception("This is an invalid email", 1);
		else
			echo "Email registered successfully";
	}
}

$newsletter = new Newsletter();

// Handling a exception
try {
	$newsletter->registerEmail("contact@");
} catch(Exception $e) {
	echo "Message: " . $e->getMessage() . "<br>"; // Will return "This is an invalid email"
	echo "Code: " . $e->getCode() . "<br>"; // Will return 1
	echo "File: " . $e->getFile() . "<br>"; // Will return the exception line number
	echo "Line: " . $e->getLine() . "<br>"; // Will return the exception file name
}