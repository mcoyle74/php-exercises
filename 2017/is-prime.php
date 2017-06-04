<?php

require_once 'primes.php';

do {
	fwrite(STDOUT, 'Enter integer: ');
	$integer = trim(fgets(STDIN));
	echo isPrime($integer) ? "true\n" : "false\n";
} while ($integer > 1);
