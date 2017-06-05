<?php

function deleteDigit($n){

	$n_arr = str_split($n);
	$n_arr_copy = $n_arr;
	$new_nums = [];
	
	for ($i = 0; $i < count($n_arr); $i++) {
		unset($n_arr_copy[$i]);
		$new_nums[] = intval(implode($n_arr_copy));
		$n_arr_copy = $n_arr;
	}
	
	return max($new_nums);
}

do {
	fwrite(STDOUT, 'Enter number: ');
	$n = trim(fgets(STDIN));
	echo deleteDigit($n), PHP_EOL;
} while ($n > 0);
