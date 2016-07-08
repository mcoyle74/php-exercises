<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combine_arrays($array1, $array2) {
	$newArray = [];
	for ($i = 0; $i < count($array1); $i++) {
		if ($array1[$i] == $array2[$i]) {
			array_push($newArray, $array1[$i]);
		} else {
			array_push($newArray, $array1[$i]);
			array_push($newArray, $array2[$i]);
		}
	}
	return $newArray;
}

print_r(combine_arrays($names, $compare));