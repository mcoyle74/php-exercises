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

	// if ($password === 'password') {
	// 	return 'The 80s called, they want their password back';
	// }
}

do {
	
	fwrite(STDOUT, 'Enter something: ');
	
	$password = trim(fgets(STDIN));
	
	echo validatePassword($password), PHP_EOL;
	
} while ($password != 'q');
