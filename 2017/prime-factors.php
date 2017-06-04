<?php

require 'primes.php';

function primeFactors($n) {

	$primes = generatePrimes($n);
	$factors = [];
	$result = '';
	$num = $n;

	foreach ($primes as $prime) {
		while ($num % $prime == 0) {
			$num /= $prime;
			$factors[] = $prime;
		}
	}
  
  	// to handle prime number inputs
	if (empty($factors)) {
		return "($n)";
	}

	// to handle cases with a prime factor > sqrt($n)
	$product = array_product($factors);
 
	if ($n / $product != 1) {
		$factors[] = $n / $product;
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
