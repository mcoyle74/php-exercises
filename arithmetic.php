<?php

function add($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		throwErrorMessage($a, $b, '!n');
	}
    return $a + $b;
}

function subtract($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		exit(1);
	}
    return $a - $b;
}

function multiply($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		throwErrorMessage($a, $b, '!n');
	}
    return $a * $b;
}

function divide($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		throwErrorMessage($a, $b, '!n');
	} elseif ($b == 0) {
		throwErrorMessage($a, $b, '/0');
	}
    return $a / $b;
}

function modulus($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		throwErrorMessage($a, $b, '!n');
	}
	return $a % $b;
}

function exponent($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		throwErrorMessage($a, $b, '!n');
	}
	return pow($a, $b);
}

function throwErrorMessage($a, $b, $error) {
	if ($error == '!n') {
		fwrite(STDERR, "ERROR: \$a = {$a} and \$b = {$b}, and both arguments must be numbers.\n");
		exit(1);
	} elseif ($error == '/0') {
		fwrite(STDERR, "ERROR: division by zero.\n");
		exit(1);
	}
}

fwrite(STDOUT, 'Enter first operand: ');
$a = trim(fgets(STDIN));
fwrite(STDOUT, 'Enter second operand: ');
$b = trim(fgets(STDIN));

echo "{$a} + {$b} = " . add($a, $b), PHP_EOL;
echo "{$a} - {$b} = " . subtract($a, $b), PHP_EOL;
echo "{$a} * {$b} = " . multiply($a, $b), PHP_EOL;
echo "{$a} / {$b} = " . divide($a, $b), PHP_EOL;
echo "{$a} % {$b} = " . modulus($a, $b), PHP_EOL;
echo "{$a}^{$b} = " . exponent($a, $b), PHP_EOL;