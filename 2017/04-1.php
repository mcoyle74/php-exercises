<?php

/* 
	Return the integer equivalent of a given Roman numeral string (max 1000).
	Example:
		input: XXIV
		output: 24
*/

function romanToInteger ($roman) {

	$romanArray = str_split($roman);
	$decimals = [];

	foreach ($romanArray as $value) {
		switch ($value) {
			case 'I':
				$decimals[] += 1;
				break;
			case 'V':
				$decimals[] += 5;
				break;
			case 'X':
				$decimals[] += 10;
				break;
			case 'L':
				$decimals[] += 50;
				break;
			case 'C':
				$decimals[] += 100;
				break;
			case 'M':
				$decimals[] += 1000;
				break;
		}

	}

	for ($i = 0; $i < count($decimals); $i++) {
		if (key_exists($i + 1, $decimals) && $decimals[$i] < $decimals[$i + 1]) {
			$decimals[$i] *= -1;
		}
	}

	return array_sum($decimals);
}

do {
	fwrite(STDOUT, 'Enter Roman numeral: ');
	$roman = trim(fgets(STDIN));
	echo romanToInteger($roman), PHP_EOL;
	
} while ($roman != 'q');
