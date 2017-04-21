<?php


// Write a function that will take a positive integer, convert it to binary, reverse the binary string, then return this reversed string in decimal form.
// Example:
// 	input: 35
// 	output: 49


function decToBinReversed($n) {
	$bin = decbin($n);
	$binRev = strrev($bin);
	return bindec($binRev);
}

do {
	fwrite(STDOUT, 'Enter integer: ');
	$integer = trim(fgets(STDIN));
	echo decToBinReversed($integer), PHP_EOL;
} while ($integer != 0);
