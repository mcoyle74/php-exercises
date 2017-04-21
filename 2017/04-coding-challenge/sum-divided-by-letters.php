<?php

// Return the sum of all the numbers in a given string divided by the number of letters.
// The answer should be rounded to the nearest whole number.
// 	Example:
//		input: H3llo fr13nd9
//		output: 2 (9 + 3 + 3 + 1 = 16, 16 / 8 letters = 2)

function sumOfNumbersDividedByNumberOfLetters($string) {
	$characters = str_split($string);
	// var_dump($characters);
	$letters = [];
	$numbers = [];

	foreach ($characters as $char) {
		if (ctype_alpha($char)) {
			array_push($letters, $char);
		} elseif (ctype_digit($char)) {
			$numbers[] += $char;
		}
	}
	return round(array_sum($numbers) / count($letters));
}

do {
	fwrite(STDOUT, 'Enter string: ');
	$string = trim(fgets(STDIN));
	echo sumOfNumbersDividedByNumberOfLetters($string), PHP_EOL;
} while ($string != 'q');
