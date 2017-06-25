<?php

/*
	Write regex to validate a given password so that it meets the following criteria:
		- at least 8 characters long
		- contains a lowercase letter
		- contains an uppercase letter
		- contains a number
		- contains a special character
	
	Example:
		input: "abC12#4d"		input: "abc1234d"
		output: true 			output: false
*/

function validatePassword($password) {

	if (mb_strlen($password) < 8) {
		return false;
	}

	if (preg_match('/[a-z]/', $password) !== 1) {
		return false;
	}

	if (preg_match('/[A-Z]/', $password) !== 1) {
		return false;
	}

	if (preg_match('/[0-9]/', $password) !== 1) {
		return false;
	}

	if (preg_match('/[^a-zA-Z0-9]/', $password) !== 1) {
		return false;
	}

	return true;
}

do {
	
	fwrite(STDOUT, 'Enter password: ');
	
	$password = trim(fgets(STDIN));
	
	echo validatePassword($password) ? "true\n" : "false\n";
	
} while ($password != 'q');
