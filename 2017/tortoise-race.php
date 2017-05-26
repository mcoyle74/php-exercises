<?php

// Given two speeds v1 (A speed, integer > 0) and v2 (B speed, integer > 0)
// and a lead g (integer > 0) how long will it take B to catch A?

// The result will be an array [h, mn, s] where h, mn, s is the time needed
// in hours, minutes and seconds (don't worry for fractions of second).
// If v1 >= v2, return null.

function race($v1, $v2, $g) {

	if ($v1 >= $v2) {
		return null;
	}

	$time = $g / ($v2 - $v1);

	$hours = floor($time);

	$minutes = round(($time - $hours) * 60, 4);

	$seconds = round(($minutes - floor($minutes)) * 60, 4);

	return [$hours, floor($minutes), floor($seconds)];
}

do {
	
	fwrite(STDOUT, 'Enter speed 1: ');
	$speed1 = trim(fgets(STDIN));

	fwrite(STDOUT, 'Enter speed 2: ');
	$speed2 = trim(fgets(STDIN));

	fwrite(STDOUT, 'Enter lead: ');
	$lead = trim(fgets(STDIN));
	
	var_dump(race($speed1, $speed2, $lead));
	
} while ($speed1 != 'q');