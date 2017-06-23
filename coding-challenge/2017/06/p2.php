<?php

/*
	Write a function that takes a string of braces, brackets and parentheses and determine
	whether or not it is formatted/ordered correctly.
	
	Example:
		input: '({[]})'		input: '[[]})'
		output: true 		output: false
*/

function bracesBracketsParensAreOrderly($string) {

	if (strlen($string) % 2 === 1) {
		return 'false';
	}

	$chars = str_split($string);
	$half = count($chars) / 2;
	$openChars = array_chunk($chars, $half)[0];
	$closeChars = array_reverse(array_chunk($chars, $half)[1]);
	$unmatched = 0;


	for ($i = 0; $i < count($openChars); $i++) { 
		if ($openChars[$i] == '(') {
			if ($closeChars[$i] != ')') {
				$unmatched++;
			}
		} elseif ($openChars[$i] == '{') {
			if ($closeChars[$i] != '}') {
				$unmatched++;
			}
		}  elseif ($openChars[$i] == '[') {
			if ($closeChars[$i] != ']') {
				$unmatched++;
			}
		}
	}

	return ($unmatched === 0) ? 'true' : 'false';
}

do {
	
	fwrite(STDOUT, 'Enter something: ');
	
	$string = trim(fgets(STDIN));
	
	echo bracesBracketsParensAreOrderly($string), PHP_EOL;
	
} while ($string != 'q');
