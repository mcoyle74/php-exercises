<?php

/*
	Count factorial numbers in a given range.
	A number F is a factorial number if there exists some integer I >= 0 such that F = I! (that is, F is a factorial of I).
	Examples of factorial numbers are 1, 2, 6, 24, 120, ...
	Write a program that takes as input two long integers 'low' and 'high' where 0 < low < high and finds count of factorial numbers in the closed interval [low, high].

	Example:
		input: 12 122
		output: 2
	What is the answer for the following -
		input: low = 2, high = 720
*/

function factorial($n) {

	if ($n == 1) {
		return 1;
	}

	return $n * factorial($n - 1);
}

function countFactorials($low, $high) {

	$facts = [];
	$count = 0;

	for ($i = 1; $i <= 20; $i++) {
		$facts[] = factorial($i);
	}

	foreach ($facts as $fact) {
		if ($fact >= $low && $fact <= $high) {
			$count++;
		}
	}

	return $count;
}

do {
	fwrite(STDOUT, 'Low number: ');
	$low = trim(fgets(STDIN));

	fwrite(STDOUT, 'High number: ');
	$high = trim(fgets(STDIN));

	echo countFactorials($low, $high), PHP_EOL;
} while ($low > 0);
