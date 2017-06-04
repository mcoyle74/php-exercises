<?php

function primeFactors($n) {

	$factors = [];
	$result = '';

	while ($n % 2 == 0) {
		$factors[] = 2;
		$n /= 2;
	}

	for ($i = 3; $i <= $n; $i += 2) {
		while ($n % $i == 0) {
			$factors[] = $i;
			$n /= $i;
		}
	}

	// returns an array with each value of $factors as a key paired with its number of occurances as the value 
	$factors_count = array_count_values($factors);

	foreach ($factors_count as $factor => $count) {
		$result .= ($count > 1) ? "($factor**$count)" : "($factor)";
	}

	return $result;
}

do {
	fwrite(STDOUT, 'Enter number: ');
	$n = trim(fgets(STDIN));
	echo primeFactors($n), PHP_EOL;
} while ($n > 0);
