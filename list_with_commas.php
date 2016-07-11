<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

function humanizedList($array, $sortByFirstName = false) {
	if ($sortByFirstName) {
		sort($array);
	}
	$pop = array_pop($array);
	array_push($array, "and {$pop}");
	$newString = implode(', ', $array);
	return $newString;
}

echo 'Some of the most famous fictional theoretical physicists are ' . humanizedList($physicistsArray) . '.' . PHP_EOL;