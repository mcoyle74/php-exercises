<?php

/*
	Given an array of integers, find and return the key X where the sum of the
	integers to the left of X is equal to the sum of the integers on the right.
	If you cannot find a key that would make this happen, return -1.
	
	Example:
		input: [1,2,3,4,3,2,1]
		output: 3
*/

function leftRightEqual($array) {

	for ($i = 1; $i < count($array) - 1; $i++) {

		$left = array_slice($array, 0, $i);
		$key = $array[$i];
		$right = array_slice($array, $i + 1);

		if (array_sum($left) == array_sum($right)) {
			return $i;
		}
	}

	return -1;
}

do {
	
	fwrite(STDOUT, 'Enter array: ');
	
	$string = trim(fgets(STDIN));

	$string = str_replace('[', '', $string);
	$string = str_replace(']', '', $string);

	$array = explode(',', $string);
	
	echo leftRightEqual($array), PHP_EOL;
	
} while ($string != 'q');
