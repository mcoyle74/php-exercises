<?php

/*

	Given string1 and string2, return true if a portion of the characters in 
	string1 can be rearranged to form string2. Otherwise return false.
	Example; 
	input: "lhkioell", "hello"		input: "kjshaaeeee", "code"
	output: true 					output: false

*/

function stringContainsAnagram($string1, $string2) {

	$count = 0;

	for ($i = 0; $i < strlen($string2); $i++) {
		$index = strpos($string1, $string2[$i]);
		if ($index !== false) {
			$string1 = substr_replace($string1, '', $index, 1);
			$count++;
		}
	}

	return $count === strlen($string2) ? true : false;
}

do {

	fwrite(STDOUT, 'Enter string 1: ');
	$str1 = trim(fgets(STDIN));

	fwrite(STDOUT, 'Enter string 2: ');
	$str2 = trim(fgets(STDIN));

	echo stringContainsAnagram($str1, $str2) ? "true\n" : "false\n";

} while ($str1 !== 'q');
