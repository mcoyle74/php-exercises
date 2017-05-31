<?php

/*
	Check if a number is a palindrome
	Given an integer, write a function that returns true if the given number is a palindrome, else false. For example, 12321 is a palindrome, but 1451 is not.

	What is the output for the following --

	99699
	56455
*/

function palindromeInt($n) {

	return $n == intval(strrev($n)) ? true : false;

}

do {
	fwrite(STDOUT, 'Enter integer: ');
	$n = trim(fgets(STDIN));
	echo palindromeInt($n) ? 'true' . PHP_EOL : 'false' . PHP_EOL;
} while ($n != 'q');
