<?php

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

$a = 8;
$b = 2;

echo "{$a} + {$b} = " . add($a, $b), PHP_EOL;
echo "{$a} - {$b} = " . subtract($a, $b), PHP_EOL;
echo "{$a} * {$b} = " . multiply($a, $b), PHP_EOL;
echo "{$a} / {$b} = " . divide($a, $b), PHP_EOL;