<?php

/*
	Given an array of integers, return the lone value that occurs an odd number 
	of times. Assume there will always be only one value with an odd incidence.
*/

function findOddOccurringInt($intArr)
{
	$intCount = array_count_values($intArr);

	foreach ($intCount as $key => $count) {
		if ($count % 2 === 1) {
			return $key;
		}
	}
	
}

// generate quasi-random test sequences of integers in even multiples with 1 odd
for ($i = 0; $i <= 9; $i ++) { 

	$sequence = [];

	for ($j = 0; $j <= 9; $j++) { 
		$rand = mt_rand(0, 2);
		switch ($rand) {
			case 0:
				array_push($sequence, $j, $j);
				break;
			case 1:
				array_push($sequence, $j, $j, $j, $j);
				break;
			case 2:
				array_push($sequence, $j, $j, $j, $j, $j, $j);
				break;
		}
	}

	$rand = mt_rand(0, 2);
	$randInt = mt_rand(0, 9);

	switch ($rand) {
		case 0:
			unset($sequence[mt_rand(0, count($sequence))]);
			break;
		case 1:
			array_push($sequence, $randInt);
			break;
		case 2:
			array_push($sequence, $randInt, $randInt, $randInt);
			break;
	}

	shuffle($sequence);

	echo implode(', ', $sequence) . PHP_EOL . findOddOccurringInt($sequence) . PHP_EOL;
}

exit(0);
