<?php

$whyIsTheAlphabetInThatOrder = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];

function sortArrayByAlphabet(&$array) {
	foreach ($array as $key => $letter) {
		if ($letter[$key] < $letter[($key + 1)]) {
			array_splice($array, $key, 0, ($key + 1));
		}
	}
	return $array;
}

var_dump(sortArrayByAlphabet($whyIsTheAlphabetInThatOrder));