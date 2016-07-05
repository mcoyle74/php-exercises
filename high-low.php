<?php

$numberOfGuesses = 0;
$min = 1;
$max = 100;

if ($argc == 3) {
	if (is_numeric($argv[1]) && is_numeric($argv[2]) && $argv[1] < $argv[2]) {
		$min = $argv[1];
		$max = $argv[2];
	} else {
		fwrite(STDERR, "You must pass two numeric values.\n");
		exit(1);
	}
}

$random = mt_rand($min, $max);
echo "I have chosen a number from {$min} to {$max}. Try to guess my number." . PHP_EOL;

do {
	fwrite(STDOUT, 'Your guess? '); 
	$guess = trim(fgets(STDIN));
	if ($guess < $random) {
		fwrite(STDOUT, "Higher\n");
	} elseif ($guess > $random) {
		fwrite(STDOUT, "Lower\n");
	}
	$numberOfGuesses++;
} while ($guess != $random);

echo 'Good guess. You win!' . "\n";
echo "You needed {$numberOfGuesses} guesses." . "\n";