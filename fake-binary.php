<?php

// Given a string of digits, replace digits < 5 with '0' and any digit >= 5  with '1'. Return the resulting string.

function fake_bin($s) {

	$digits = str_split($s);
	$digitStr = '';

	foreach ($digits as $digit) {

		($digit < 5) ? $digitStr .= '0' : $digitStr .= '1';

	}

	return $digitStr;
}

echo fake_bin('45385593107843568'), PHP_EOL;