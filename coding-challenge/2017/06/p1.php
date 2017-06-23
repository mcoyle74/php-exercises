<?php

/*
	Find the closest prime number less than a given number n that has the maximum
	amount of even digits.
	
	Example:
		input: 1000 	input: 500
		output: 887 	output: 487
*/

function isPrime($n) {

	$sqrt_n = sqrt($n);

	for ($i = 2; $i <= $sqrt_n; $i++) {
		if ($n % $i == 0) {
			return false;
		}
	}

	return true;
}

function maximumEvenDigits($n, $max) {

	$primes = [];
	$candidates = [];

	for ($i = $n; $i > $n / 100; $i--) {
		if (isPrime($i)) {
			$primes[] = $i;
		}
	}

	for ($i = 0; $i < count($primes); $i++) {
		$digits = str_split($primes[$i]);
		$evenCount = 0;
		for ($j = 0; $j < count($digits); $j++) {
			if ($digits[$j] % 2 == 0) {
				$evenCount++;
			}
		}

		if ($evenCount == $max) {
			$candidates[] = $primes[$i];
		}
	}

	if (empty($candidates)) {
		return maximumEvenDigits($n, $max - 1);
	} else {
		return max($candidates);
	}
}

do {
	
	fwrite(STDOUT, 'Enter number: ');
	
	$n = trim(fgets(STDIN));

	$max = count(str_split($n)) - 1;
	
	echo maximumEvenDigits($n, $max), PHP_EOL;
	
} while ($n != 'q');
