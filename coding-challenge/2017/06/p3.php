<?php

/*
	Create a function that finds the digital root of a given number. A digital root is the
	recursive sum of all the digits in that number. Given n, find the sum of all the digits
	of n. If the remaining number has two or more digits, continue reducing the number in
	this way until one digit remains. Inputs will always be integers.
	
	Example:
		input: 16		input: 6241
		output: 7		output: 4
*/

function digitalRoot($n) {

	if (mb_strlen((string) $n) === 1) {
		return $n;
	}

	$digits = str_split((string) $n);

	$sum = array_sum($digits);

	if (mb_strlen((string) $sum) > 1) {
		return digitalRoot($sum);
	}

	return $sum;
}

do {
	
	fwrite(STDOUT, 'Enter number: ');
	
	$n = trim(fgets(STDIN));
	
	echo digitalRoot($n), PHP_EOL;
	
} while ($n != 'q');
