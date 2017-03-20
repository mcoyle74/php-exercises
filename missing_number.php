<?php

function findMissingNumber($array)
{
	foreach ($array as $key => $value) {
		if ($key + 1 != $value) {
			return $key + 1;
		}
	}
}

$numbers = [1, 2, 3, 4, 5, 6, 8, 9];
echo findMissingNumber($numbers) . ' is missing from the array' . PHP_EOL;