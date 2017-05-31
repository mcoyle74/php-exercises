<?php

/*
	Find Excel column name from a given column number - MS Excel columns have a
	pattern: A, B, C, ... , Z, AA, AB, AC, ...AZ, BA, BB, ... ZZ, AAA, AAB, ... etc.
	In other words, column 1 is named 'A', column 2 'B', column 27 'AA'.

	Example:
		input: 26
		output: Z
*/

function excelColumn($n) {

	$columns = [0];

	for ($i = 0; $i < 26; $i++) {
		$columns[] = chr($i + 65);
	}

	for ($i = 0; $i < 26; $i++) {
		for ($j = 0; $j < 26; $j++) {
			$columns[] = chr($i + 65) . chr($j + 65);
		}
	}

	for ($i = 0; $i < 26; $i++) {
		for ($j = 0; $j < 26; $j++) {
			for ($k = 0; $k < 26; $k++) {
				$columns[] = chr($i + 65) . chr($j + 65) . chr($k + 65);
			}
		}
	}

	return $columns[$n];
}

do {
	fwrite(STDOUT, 'Enter number: ');
	$num = trim(fgets(STDIN));
	echo excelColumn($num), PHP_EOL;
} while ($num > 0);
