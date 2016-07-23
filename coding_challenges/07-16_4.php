<?php

// Given a positice integer, output every combination of positive integers that adds up to the given number.
// Example input: 4
// output: 1, 1, 1, 1
// 	1, 1, 2
// 	2, 2
// 	1, 3
// 	4

// This is just a beginning, and probably not the correct approach.

fwrite(STDOUT, "Enter a positive integer: ");
$integer = trim(fgets(STDIN));

$addents = [];

for ($i = $integer ; $i > 0; $i--) {
	$numbers[] = $i;
}

foreach ($numbers as $key => $number) {
	for ($i = 1; $i < $key; $i++) {
		echo "$number \n";
	}
}

// given 7:
// 6 1
// 5 2
// 5 1 1
// 4 3
// 4 2 1
// 4 1 1 1
// 3 3 1
// 3 2 1 1
// 3 1 1 1 1
// 2 2 2 1
// 2 2 1 1 1
// 2 1 1 1 1 1
// 1 1 1 1 1 1 1

?>
