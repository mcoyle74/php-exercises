<?php

/*

	When giving somone directions would you tell them to go north then south?
	How about east then west? Given an array of directions with not so reasonable
	combinations, return a simplified version.
	Example:
	input: ['North', 'South', 'South', 'East', 'West', 'North', 'West']
	output: ['West']

*/

function simplifyDirections($directionsArr) {

	$directionsCount = array_count_values($directionsArr);
	$newDirections = [];

	if (!isset($directionsCount['North'])) $directionsCount['North'] = 0;
	if (!isset($directionsCount['South'])) $directionsCount['South'] = 0;
	if (!isset($directionsCount['East'])) $directionsCount['East'] = 0;
	if (!isset($directionsCount['West'])) $directionsCount['West'] = 0;

	while (abs($directionsCount['North'] - $directionsCount['South']) > 0) {

		if ($directionsCount['North'] > $directionsCount['South']) {

			$newDirections[] = 'North';
			$directionsCount['North']--;

		} elseif ($directionsCount['North'] < $directionsCount['South']) {

			$newDirections[] = 'South';
			$directionsCount['South']--;

		}
	}

	while (abs($directionsCount['East'] - $directionsCount['West']) > 0) {

		if ($directionsCount['East'] > $directionsCount['West']) {

			$newDirections[] = 'East';
			$directionsCount['East']--;

		} elseif ($directionsCount['East'] < $directionsCount['West']) {

			$newDirections[] = 'West';
			$directionsCount['West']--;

		}
	}

	return implode(', ', $newDirections);

}

do {
	
	fwrite(STDOUT, 'Enter directions: ');
	
	$directions = trim(fgets(STDIN));

	$directionsArr = explode(', ', $directions);
	
	echo simplifyDirections($directionsArr), PHP_EOL;
	
} while ($directions != 'q');
