<?php

// Given a positive integer, output every combination of positive integers that adds up to the given number.
// Example input: 4
// output: 1, 1, 1, 1
// 	1, 1, 2
// 	2, 2
// 	1, 3
// 	4

// This is just a beginning, and probably not the correct approach.

function generateCombinations($array) {

}

fwrite(STDOUT, "Enter a positive integer: ");
$integer = trim(fgets(STDIN));
$numbers1 = '';
$numbers2 = '';
$numbers3 = '';
$numbers4 = '';
$numbers5 = '';

// for ($i = $integer - 1, $j = 2; $i > 0; $i--, $j++) {
// 	$numbers1 .= "$i ";
// 	$m = $integer - $j;
// 	$n = $integer - ($j + 1);
// 	if ($m >= ($integer/2)) {
// 		$numbers2 .= "$m $j";
// 		$numbers2 .= PHP_EOL;
// 	}
// 	if ($n >= ($integer/2)) {
// 		$numbers3 .= "$n $j";
// 		if ($n == $integer - 3) {
// 			$numbers3 .= ' 1';
// 		}
// 	}
// 	for ($k = 1; $k < $j; $k++) {
// 		$numbers1 .= '1 ';
// 	}
// 	$numbers1 .= PHP_EOL;
// }

for ($i = 1, $j = ($integer - 1); $i < $integer; $i++, $j--) {
	$numbers1 .= "$i ";

	for ($k = 1; $k <= $j; $k++) {
		$numbers1 .= '1 ';
	}
	$numbers1 .= PHP_EOL;
}

// for ($i = 1, $j = ($integer - 1); $i < $integer; $i++, $j--) {
// 	$numbers1 .= "$i ";
// 	for ($k = 1; $k <= $j; $k++) {
// 		$numbers1 .= '1 ';
// 	}
// 	$numbers1 .= PHP_EOL;
// }

echo $numbers1;
echo $numbers2 . PHP_EOL;
echo $numbers3 . PHP_EOL;
echo $numbers4 . PHP_EOL;

// foreach ($numbers as $key => $number) {
// 	for ($i = 1; $i < $key; $i++) {
// 		echo "$number \n";
// 	}
// }

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
