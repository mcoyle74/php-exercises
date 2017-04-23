<?php

// Given an integer parameter, write a function that will return the next greater number using the same digits.
// Example:
//		input: 230
//		output: 302

function nextIntWithSameDigtis($int) {

	$intArray = str_split($int);
	rsort($intArray);
	$max = (int) implode($intArray);

	for ($i = $int + 1; $i <= $max; $i++) {
		$iArray = str_split($i);
		rsort($iArray);
	
		if ($iArray == $intArray) {
			return $i;
		}
	}
}

do {
	fwrite(STDOUT, 'Enter integer: ');
	$integer = trim(fgets(STDIN));
	echo nextIntWithSameDigtis($integer), PHP_EOL;
} while ($integer > 0);
