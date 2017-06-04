<?php

require_once 'primes.php';

do {
	fwrite(STDOUT, 'Enter max: ');
	$max = trim(fgets(STDIN));
	var_dump(generatePrimes($max));
} while ($max > 1);
