<?php

// Given a Fibonacci number, output its index in the sequence.
// Example input: 21
// output: 8

$numA = 0;
$numB = 1;
$fib = [];

echo "The first 50 fibonacci numbers are : \n";
for ($i = 0; $i < 50; $i++) {
	$numB += $numA;
	echo $numB . PHP_EOL;
	$fib[] = $numB;
	$numA += $numB;
	echo $numA . PHP_EOL;
	$fib[] = $numA;

}

fwrite(STDOUT, 'Enter fibonacci number: ');
$fibonacci = trim(fgets(STDIN));

if (array_search($fibonacci, $fib) !== false) {
	echo "{$fibonacci} is the " . array_search($fibonacci, $fib) . "th fibonacci number\n";
} else {
	echo "[shrug] I do not think that is a fibonacci number.\n";
}

?>