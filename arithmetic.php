<?php

$a = true;
$b = 'thoughts';

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	    return $a + $b;
	} else {
		return "ERROR: Both arguments must be numbers.\n";
	}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	    return $a - $b;
	} else {
		return "ERROR: Both arguments must be numbers.\n";
	}
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	    return $a * $b;
	} else {
		return "ERROR: Both arguments must be numbers.\n";
	}
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	    return $a / $b;
	} else {
		return "ERROR: Both arguments must be numbers.\n";
	}
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;
	} else {
		return "ERROR: Both arguments must be numbers.\n";
	}
}

echo "{$a} + {$b} = " . add($a, $b), PHP_EOL;
echo "{$a} - {$b} = " . subtract($a, $b), PHP_EOL;
echo "{$a} * {$b} = " . multiply($a, $b), PHP_EOL;
echo "{$a} / {$b} = " . divide($a, $b), PHP_EOL;
echo "{$a} % {$b} = " . modulus($a, $b), PHP_EOL;