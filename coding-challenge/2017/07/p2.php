<?php

/*
	Given a list of integers and a single value, return the first two integers
	in order of appearance that add up to form the value.
	Example:
	input: [4, 3, 2, 3, 4], 6		input: [11, 3, 7, 5], 10
	output: [4, 2]					output: [3, 7]
*/

function first2IntegersEqualsValue($list, $n) {

	$list = explode(', ', $list);
	$keys = [];

	for ($i = 0; $i < count($list); $i++) {
		for ($j = $i + 1; $j < count($list); $j++) {
			if ($list[$i] + $list[$j] == $n) {
				$keys[] = $j;
			}
		}
	}

	$addend = $list[min($keys)];

	return ($n - $addend) . ', ' . $addend;

}

do {
	
	fwrite(STDOUT, 'Enter integers: ');
	$list = trim(fgets(STDIN));
	
	fwrite(STDOUT, 'Enter number: ');
	$n = trim(fgets(STDIN));
	
	echo first2IntegersEqualsValue($list, $n), PHP_EOL;
	
} while ($list != 'q');
