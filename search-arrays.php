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

fwrite(STDOUT, "Enter name: ");
$handle = trim(fgets(STDIN));

if (arrayHasValue($names, $handle)) {
	echo "Array \$names contains {$handle}\n";
} else {
	echo "Array \$names does NOT contain {$handle}\n";
}