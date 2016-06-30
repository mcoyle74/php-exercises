<?php

$number = 2;

do {
	echo $number . PHP_EOL;
	$number *= $number;
} while ($number < 1000000);