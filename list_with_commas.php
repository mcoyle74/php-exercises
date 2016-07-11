<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

$testArray = ['one', 'two', 'three', 'four'];

function humanizedList($array) {
	$pop = array_pop($array);
	array_push($array, 'and', $pop);
	$newString = implode(', ', $array);
	$newString = str_replace('and,', 'and', $newString);
	 return $newString;
}

echo 'Some of the most famous fictional theoretical physicists are ' . humanizedList($physicistsArray) . PHP_EOL;
echo 'The first four numbers in English are ' . humanizedList($testArray) . PHP_EOL;
