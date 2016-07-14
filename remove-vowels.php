<?php

$letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];

function removeVowels(&$array) {
	$vowels = ['a', 'e', 'i', 'o', 'u'];
	$remove = [];
	foreach ($vowels as $vowel) {
		$letter = array_search($vowel, $array);
		if ($array[$letter] == $vowel) {
			$remove[] = array_search($vowel, $array);
		}
	}
	for ($i = 0; $i < count($remove); $i++) {
		unset($array[$remove[$i]]);
	}
	return $array;
}

var_dump(removeVowels($letters));
