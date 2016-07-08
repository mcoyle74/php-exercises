<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function arrayHasValue($array, $value) {
	$result = array_search($value, $array);
	if ($result === false) {
		return false;
	}
	return true;
}

// var_dump(arrayHasValue($names, 'Tina'));
// var_dump(arrayHasValue($names, 'Bob'));

function compareArrays($array1, $array2) {
	$matches = 0;
	foreach ($array1 as $name) {
		if (array_search($name, $array2) !== false) {
			$matches++;
		}
	}
	return $matches;
}

// echo "\$names and \$compare have " . compareArrays($names, $compare) . " items that match.\n";

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