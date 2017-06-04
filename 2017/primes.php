<?php

function isPrime($n) {

	$sqrt_n = sqrt($n);

	for ($i = 2; $i <= $sqrt_n; $i++) {
		if ($n % $i == 0) {
			return false;
		}
	}

	return true;
}

function generatePrimes($max) {

	$primes = [2, 3];

	for ($i = 6; $i <= $max; $i += 6) {
		if (isPrime($i - 1)) {
			$primes[] = $i - 1;
		}
		if (isPrime($i + 1)) {
			$primes[] = $i + 1;
		}
	}

	return $primes;
}
