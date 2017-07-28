<?php

/*
	
	Write a function that takes a sting and returns the same string with all
	five or more letter words reversed.
	Example: 
	input: "Coding is fun"
	output: "gnidoC is fun"

*/

function reverseWords5LettersOrMore($string)
{
	$words = array_map(function($word) {
		return strlen($word) > 4 ? strrev($word) : $word;
	}, explode(' ', $string));

	return implode(' ', $words);
}

do {
	fwrite(STDOUT, 'Enter string: ');
	$str = trim(fgets(STDIN));

	echo reverseWords5LettersOrMore($str), PHP_EOL;
} while ($str !== 'q');
