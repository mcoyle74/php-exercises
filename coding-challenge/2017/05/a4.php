<?php

/*
	Count all the numbers from 1 to n that have 4 as a digit.

	Example:
		input: n = 5
		output: 1	// Only 4 has '4' as a digit

	What is the output for the following -

		input: n = 50
		input: n = 328
*/

function countTheFours($n) {

	$count = 0;

	for ($i = 1; $i <= $n; $i++) {
		if (strpos(strval($i), '4') !== false) {
			$count++;
		}
	}

	return $count;
}

do {
	fwrite(STDOUT, 'Enter number: ');
	$n = trim(fgets(STDIN));
	echo countTheFours($n), PHP_EOL;
} while ($n > 0);
