<?php

/*
	Given a 2D "n x n" array return a 1D array with the elements arranged
	from the outermost elements to the middle element, traveling clockwise.

	Example:
		input: [[3, 7, 2],
				[10, 4, 9],
				[7, 2, 6]]
		output: [3, 7, 2, 9, 6, 2, 7, 10, 4]
*/

function doSomething($var) {

	// code

	return;
}

do {
	
	fwrite(STDOUT, 'Enter number: ');
	
	$var = trim(fgets(STDIN));
	
	echo doSomething($var), PHP_EOL;
	
} while ($var != 'q');
