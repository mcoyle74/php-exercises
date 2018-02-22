<?php

function toRomanNumeral($integer)
{
	$romanPowers10 = [
		'M' => 1000, 'C' => 100, 'X' => 10, 'I' => 1
	];
	$romanSubs = [
		'C{9}' => 'CM', 'C{5}' => 'D', 'C{4}' => 'CD',
		'X{9}' => 'XC', 'X{5}' => 'L', 'X{4}' => 'XL', 
		'I{9}' => 'IX', 'I{5}' => 'V', 'I{4}' => 'IV' 
	];
	$romanNumeral = '';

	foreach ($romanPowers10 as $roman => $power) {
		while ($integer >= $power) {
			$romanNumeral .= $roman;
			$integer -= $power;
		}
	}

	foreach ($romanSubs as $pattern => $sub) {
		$romanNumeral = preg_replace("/$pattern/", $sub, $romanNumeral);
	}

	return $romanNumeral;
}

do {
	fwrite(STDOUT, 'Enter integer: ');
	$integer = trim(fgets(STDIN));
	echo toRomanNumeral($integer), PHP_EOL;
} while ($integer != 0);

exit(0);
