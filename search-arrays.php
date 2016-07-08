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

var_dump(arrayHasValue($names, 'Tina'));
var_dump(arrayHasValue($names, 'Dana'));
var_dump(arrayHasValue($names, 'Mike'));
var_dump(arrayHasValue($names, 'Amy'));
var_dump(arrayHasValue($names, 'Adam'));
var_dump(arrayHasValue($names, 'Bob'));
var_dump(arrayHasValue($names, 'Rob'));
var_dump(arrayHasValue($names, 'Job'));
var_dump(arrayHasValue($names, 'Cob'));
var_dump(arrayHasValue($names, 'Blob'));