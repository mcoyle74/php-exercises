<?php

/*
	Write a function that takes a positive integer (seconds) and returns the time
	in a human-readable format (HH:MM:SS). Note: you will never be given a number
	greater than 86400, the amount of seconds in 24 hours.
	Example: 
	input: 28314
	output: 07:51:54
*/

function humanReadableTime($seconds) {

	$hours = '00';
	$mins = '00';

	if ($seconds > 0) {
		$hours = str_pad(floor($seconds / 3600), 2, '0', STR_PAD_LEFT);
		$seconds %= 3600;
	}

	if ($seconds > 0) {
		$mins = str_pad(floor($seconds / 60), 2, '0', STR_PAD_LEFT);
		$seconds %= 60;
	}

	$seconds = str_pad($seconds, 2, '0', STR_PAD_LEFT);


	return "$hours:$mins:$seconds";

}

do {
	
	fwrite(STDOUT, 'Enter seconds: ');
	
	$seconds = trim(fgets(STDIN));
	
	echo humanReadableTime($seconds), PHP_EOL;
	
} while ($seconds != 'q');
