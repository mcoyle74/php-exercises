<?php

/*
	Write a function that determines whther or not a given string is a valid password.
	A password must follow these rules:
		1. Have a capital letter.
		2. Have at least one number.
		3. Contain a punctuation mark.
		4. It cannot have the word "password" in it.
		5. It must be longer than 7 characters and shorter than 21 characters.
	
	Examples:
		input: passWord101!
		output: false
	
		input: codE35?
		output: true
*/

function validatePassword($password) {

	if (strlen($password) < 8 || strlen($password) > 20) {
		return 'false';
	}

	$matchesCap = [];
	$matchesNum = [];
	$matchesPunct = [];
	$matchesPW = [];
	$criteria = 0;

	preg_match('/[A-Z]/', $password, $matchesCap);
	preg_match('/[0-9]/', $password, $matchesNum);
	preg_match('/[^a-zA-Z0-9]/', $password, $matchesPunct);
	preg_match('/password/i', $password, $matchesPW);

	if (!empty($matchesCap)) {
		$criteria++;
	}

	if (!empty($matchesNum)) {
		$criteria++;
	}

	if (!empty($matchesPunct)) {
		$criteria++;
	}

	if (empty($matchesPW)) {
		$criteria++;
	}

	return $criteria == 4 ? 'true' : 'false';
}

do {
	fwrite(STDOUT, 'Enter password: ');
	$password = trim(fgets(STDIN));
	echo validatePassword($password), PHP_EOL;
} while ($password != 'q');
