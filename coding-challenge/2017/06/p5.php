<?php

/*
	Write a function that determines whether or not a string is a valid guess on a Boggle
	board, as per the rules of Boggle. A Boggle board is an array of individual characters,
	like so:

		[['I', 'L', 'A', 'W'],
		['B', 'N', 'G', 'E'],
		['I', 'U', 'A', 'O',],
		['A','S', 'R', 'L']]

	Valid guesses are strings which can be formed by connecting adjacent cells (horizontally,
	verically or diagonally) without re-using any previous used cells.
	
	For example, in the above board 'BINGO', 'LINGO', and 'ILNBIA' would all be valid guesses,
	while 'BUNGIE', 'BINS' and 'SINUS' would not.

	Your function should take two arguments (an array and a string) and return true or false
	depending on whether the string is found in the array.

	The provided array will always be a square array of single capitalized letters, and the
	string will always be a single capitalized word. You do NOT have to check whether the string
	is a valid word or not, only if it's a valid guess.
*/

function isValidBoggleGuess($array, $string) {

	// magic();
}

do {
	
	fwrite(STDOUT, 'Enter something: ');
	
	$array = trim(fgets(STDIN));
	$string = trim(fgets(STDIN));
	
	echo isValidBoggleGuess($array, $string), PHP_EOL;
	
} while ($string != 'q');
