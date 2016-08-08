<?php

$uncapitalized = ['arches', 'badlands', 'carlsbad', 'denali'];
$to_capitalize = ['denali', 'badlands'];

function capitalize(&$array_lower, $array_to_cap) {
	foreach ($array_lower as $key => $lower) {
		foreach ($array_to_cap as $to_cap) {
			if ($lower == $to_cap) {
				$array_lower[$key] = ucfirst($lower);
			}
		}
 	}
 	return $array_lower;
}

print_r(capitalize($uncapitalized, $to_capitalize));
?>