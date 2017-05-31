<?php

// Write a function that takes in a number and returns the sum
// of all the numbers less than it that are multipes of 3 or 5.
// If the number is a multiple of 3 and 5, only count it once.

function sumMultiplesOf3and5($number) {

	$multiples = [];

	for ($i = 3; $i < $number; $i++) {

		if ($i % 3 == 0 || $i % 5 == 0) {

			$multiples[] = $i;
		}
	}

	return array_sum($multiples);
}

do {
	
	fwrite(STDOUT, 'Enter number: ');
	
	$num = trim(fgets(STDIN));
	
	echo sumMultiplesOf3and5($num), PHP_EOL;
	
} while ($num != 'q');
