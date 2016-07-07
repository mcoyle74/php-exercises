<?php

$a = false;
$b = 'existence';

function add($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		fwrite(STDERR, "ERROR: arguments must be numbers.\n");
		exit(1);
	}
    return $a + $b;
}

function subtract($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		fwrite(STDERR, "ERROR: arguments must be numbers.\n");
		exit(1);
	}
    return $a - $b;
}

function multiply($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		fwrite(STDERR, "ERROR: arguments must be numbers.\n");
		exit(1);
	}
    return $a * $b;
}

function divide($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		fwrite(STDERR, "ERROR: arguments must be numbers.\n");
		exit(1);
	} elseif ($b == 0) {
		fwrite(STDERR, "ERROR: division by zero.");
		exit(1);
	}
    return $a / $b;
}

function modulus($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		fwrite(STDERR, "ERROR: arguments must be numbers.\n");
		exit(1);
	}
	return $a % $b;
}

echo "{$a} + {$b} = " . add($a, $b), PHP_EOL;
echo "{$a} - {$b} = " . subtract($a, $b), PHP_EOL;
echo "{$a} * {$b} = " . multiply($a, $b), PHP_EOL;
echo "{$a} / {$b} = " . divide($a, $b), PHP_EOL;
echo "{$a} % {$b} = " . modulus($a, $b), PHP_EOL;