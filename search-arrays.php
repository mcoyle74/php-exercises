<?php

$names = ['Steve', 'Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Steve', 'Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

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
		// arrayHasValue($array2, $name);
		if (arrayHasValue($array2, $name)) {
			$matches++;
		}
	}
	// array_search($name, $array2);
	return $matches;
}

var_dump(compareArrays($names, $compare));