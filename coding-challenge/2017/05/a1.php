<?php

/*
	Given a whole number from 1-9, return the word representation.

	Example: input: 5
			 output: five
*/

$numbers = ['', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];

do {

	fwrite(STDOUT, 'Enter a number from 1 to 9: ');
	$number = trim(fgets(STDIN));

	if ($number > 0 && $number < 10) {
		echo $numbers[$number] . PHP_EOL;
	}

} while ($number > 0 && $number < 10);
