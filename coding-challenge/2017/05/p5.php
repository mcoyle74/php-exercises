<?php

/*
	You are building a structure by stacking cubes. The base cube will have
	a volume of n^3, the next cube up will be (n - 1)^3 and so on until you
	reach 1^3. Write a function that, given the total expected volume of the
	building will return the number of cubes needed for the project.

	Example:
		input: 36
		output: 3
*/

function numberOfCubes($volume) {

	$cubes = [];

	for ($i = 1; $i <= $volume; $i++) {

		$cubes[] = pow($i, 3);

		if (array_sum($cubes) == $volume) {
			return count($cubes);
		}
	}
}

do {
	
	fwrite(STDOUT, 'Enter volume: ');
	
	$volume = trim(fgets(STDIN));
	
	echo numberOfCubes($volume), PHP_EOL;
	
} while ($volume != 'q');
