<?php

/*
	Given a string of words for the numbers 0-9, calculate the average and return 
	its floor (greatest integer < average) as a word. If an empty string or a value
	greater than 9 is passed, return "n/a."

	Example:
	input -> "zero nine five two"
	output -> "four"
*/

function averageString($str)
{
	if (empty($str)) {
		return 'n/a';
	}

	$numberWords = [
		'zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'
	];

	$words = explode(' ', $str);

	foreach ($words as &$word) {
		
		if (in_array($word, $numberWords)) {
			$word = array_search($word, $numberWords);
		} else {
			return 'n/a';
		}
	}

	return $numberWords[floor(array_sum($words) / count($words))];
}

do {
	fwrite(STDOUT, 'Enter words for any numbers 0-9, separated by spaces: ');
	$str = trim(fgets(STDIN));
	echo averageString($str), PHP_EOL;
} while ($str !== 'q');
