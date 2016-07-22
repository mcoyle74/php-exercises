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
	// During the challenge, I did not check for divisibility by 1 because, I reasoned, every integer is divisible by 1, but I failed to account for this in my output. This echo fixes that.
	echo "Greatest common divisor is 1.\n";
}

?>