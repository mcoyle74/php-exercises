<?php

$whyIsTheAlphabetInThatOrder = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];

function sortArrayAlphabetically(&$array) {
	for ($i = 0; $i < count($array); $i++) {
		for ($j = $i + 1; $j < count($array); $j++) {
			if ($array[$i] > $array[$j]) {
				$holder = $array[$i];
				$array[$i] = $array[$j];
				$array[$j] = $holder;
			}
		}
	}
	return $array;
}

function cleverApproachToSortingAnArrayAlphabetically(&$array) {
	$sorted = [];
	$min = min($array);
	$sorted[] = $min;
	$remove = array_search($min, $array);
	unset($remove[0]);
	var_dump($array);
	return $sorted;
}

var_dump(cleverApproachToSortingAnArrayAlphabetically($whyIsTheAlphabetInThatOrder));