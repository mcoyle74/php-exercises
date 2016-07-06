<?php

$a = mt_rand(1, 100);
$b = mt_rand(1, 100);

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
	return $a % $b;
}

echo "{$a} + {$b} = " . add($a, $b), PHP_EOL;
echo "{$a} - {$b} = " . subtract($a, $b), PHP_EOL;
echo "{$a} * {$b} = " . multiply($a, $b), PHP_EOL;
echo "{$a} / {$b} = " . divide($a, $b), PHP_EOL;
echo "{$a} % {$b} = " . modulus($a, $b), PHP_EOL;