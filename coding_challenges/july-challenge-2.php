<?php

// Find the greatest common divisor of two given positive integers.
// Example input: 30 42
// output: 6

fwrite(STDOUT, 'Enter divisor #1: ');
$divisor1 = trim(fgets(STDIN));
fwrite(STDOUT, 'Enter divisor #2: ');
$divisor2 = trim(fgets(STDIN));
$divisors = [];

if ($divisor1 < $divisor2) {
	for ($i = 2; $i <= $divisor1; $i++) {
		if (($divisor1 % $i == 0) && ($divisor2 % $i == 0)) {
			$divisors[] = $i;
		}
		
	}
} else {
	for ($i = 2; $i <= $divisor2; $i++) {
		if (($divisor1 % $i == 0) && ($divisor2 % $i == 0)) {
			$divisors[] = $i;
		}
		
	}
}

if (!empty($divisors)) {
	echo 'Greatest common divisor is ' . max($divisors) . PHP_EOL;
} else {
	echo "{$divisor1} and {$divisor2} have no common divisors? (but I could be wrong)\n";
}

?>