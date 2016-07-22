<?php

// Given a Fibonacci number, output its index in the sequence.
// Example input: 21
// output: 8

$fib = [];
$numA = 0;
$fib[] = $numA;
$numB = 1;

for ($i = 0; $i < 50; $i++) {
	$numB += $numA;
	$fib[] = $numB;
	$numA += $numB;
	$fib[] = $numA;

}

fwrite(STDOUT, 'Enter fibonacci number: ');
$fibonacci = trim(fgets(STDIN));

if (array_search($fibonacci, $fib) !== false) {
	echo array_search($fibonacci, $fib) . PHP_EOL;
} else {
	echo "Hmmmm, is {$fibonacci} a fibonacci number?\n";
}

?>