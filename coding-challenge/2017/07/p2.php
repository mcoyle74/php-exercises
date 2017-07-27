<?php

/*
	Given a list of integers and a single value, return the first two integers
	in order of appearance that add up to form the value.
	Example:
	input: [4, 3, 2, 3, 4], 6		input: [11, 3, 7, 5], 10
	output: [4, 2]					output: [3, 7]
*/

function first2thatSum($list, $n) {

	$list = explode(', ', $list);

	for ($i = 0; $i < count($list); $i++) {
		for ($j = $i + 1; $j < count($list); $j++) {
			if ($list[$i] + $list[$j] == $n) {
				return $list[$i] . ', ' . $list[$j];
			}
		}
	}

}

do {
	
	fwrite(STDOUT, 'Enter integers: ');
	$list = trim(fgets(STDIN));
	
	fwrite(STDOUT, 'Enter number: ');
	$n = trim(fgets(STDIN));
	
	echo first2thatSum($list, $n), PHP_EOL;
	
} while ($list != 'q');
