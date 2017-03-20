<?php

function reverseArrayItems($array)
{
	$count = count($array);
	$newArray = [];
	for ($i = 0; $i < $count; $i++) {
		$newArray[] = array_pop($array);
	}
	return $newArray;
}

$testArray = ['1', '2', '3', '4', '5'];
$testArray2 = ['apple', 'boat', 'case', 'date', 'elephant', 'feather', 'gas', 'halt', 'ice', 'jungle'];
print_r(reverseArrayItems($testArray));
print_r(reverseArrayItems($testArray2));