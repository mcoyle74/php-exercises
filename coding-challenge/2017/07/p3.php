<?php

/*
	Write a function that takes a positive integer (seconds) and returns the time
	in a human-readable format (HH:MM:SS). Note: you will never be given a number
	greater than 86400, the amount of seconds in 24 hours.
	Example: 
	input: 28314
	output: 07:51:54
*/

function humanReadableTime($sec) {

	$time = '';

	if ($sec > 0) {
		$time .= str_pad(floor($sec / 3600), 2, '0', STR_PAD_LEFT);
		$sec %= 3600;
	} else {
		$time .= '00';
	}

	$time .= ':';

	if ($sec > 0) {
		$time .= str_pad(floor($sec / 60), 2, '0', STR_PAD_LEFT);
		$sec %= 60;
	} else {
		$time .= '00';
	}

	$time .= ':';

	if ($sec > 0) {
		$time .= str_pad($sec, 2, '0', STR_PAD_LEFT);
		$sec %= 60;
	} else {
		$time .= '00';
	}

	return $time;

}

do {
	
	fwrite(STDOUT, 'Enter seconds: ');
	
	$sec = trim(fgets(STDIN));
	
	echo humanReadableTime($sec), PHP_EOL;
	
} while ($sec != 'q');
