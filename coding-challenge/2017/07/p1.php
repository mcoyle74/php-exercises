<?php

/*

	When giving somone directions would you tell them to go north then south?
	How about east then west? Given an array of directions with not so reasonable
	combinations, return a simplified version.
	Example:
	input: ['North', 'South', 'South', 'East', 'West', 'North', 'West']
	output: ['West']

*/

function simplifyDirections($arr) {

	$dir_count = array_count_values($arr);
	print_r($dir_count);

}

do {
	
	fwrite(STDOUT, 'Enter directions: ');
	
	$dir = trim(fgets(STDIN));

	$arr = explode(', ', $dir);
	
	echo simplifyDirections($arr);
	
} while ($dir != 'q');
