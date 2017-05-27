<?php

/*
	Write a function to translate English into Morse code.
	A single space should be used to separate character codes
	and 3 spaces to separate words.
	
	Example:
		input: "hey im hungry"
		output: ".... . -.--    .. --    .... ..- -. --. .-. -.--"
*/

function englishToMorse($string) {

	$code = [
			'A' => '.-',
			'B' => '-...',
			'C' => '-.-.',
			'D' => '-..',
			'E' => '.',
			'F' => '..-.',
			'G' => '--.',
			'H' => '....',
			'I' => '..',
			'J' => '.---',
			'K' => '-.-',
			'L' => '.-..',
			'M' => '--',
			'N' => '-.',
			'O' => '---',
			'P' => '.--.',
			'Q' => '--.-',
			'R' => '.-.',
			'S' => '...',
			'T' => '-',
			'U' => '..-',
			'V' => '...-',
			'W' => '.--',
			'X' => '-..-',
			'Y' => '-.--',
			'Z' => '--..',
			'1' => '.----',
			'2' => '..---',
			'3' => '...--',
			'4' => '....-',
			'5' => '.....',
			'6' => '-....',
			'7' => '--...',
			'8' => '---..',
			'9' => '----.',
			'0' => '-----'
		];

		$english = str_split($string);
		$result = '';

		foreach ($english as $char) {
			if ($char === ' ') {
				$result .= '  '; 
			}
			$result .= $code[strtoupper($char)] . ' ';
		}

	return $result;
}

do {
	
	fwrite(STDOUT, 'Enter string: ');
	
	$str = trim(fgets(STDIN));
	
	echo englishToMorse($str), PHP_EOL;
	
} while ($str != 'q');
