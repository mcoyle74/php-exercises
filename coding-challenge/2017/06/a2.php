<?php

/*
	Write a function to find the lowest AND highest value in an array.

	Examples:
		input: [12, 34, 56, 1]		input: [-12, -34, 0, 4, -1]
		output: 1, 56				output: -34, 4
*/

function lowestAndHighest($array)
{
	$low = min($array);
	$high = max($array);

	return "Low: $low\nHigh: $high";
}

do {
	fwrite(STDOUT, 'Enter an array of integers, [int_a, int_b, int_c,...]: ');
	$input = trim(fgets(STDIN), " []\n");
	$array = explode(', ', $input);
	echo lowestAndHighest($array), PHP_EOL;
} while ($input != 'q');
