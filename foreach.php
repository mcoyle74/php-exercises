<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
	if (is_int($thing)) {
		echo "{$thing} is an integer.\n";
	} elseif (is_float($thing)) {
		echo "{$thing} is a float.\n";						
	}
	 elseif (is_bool($thing)) {
		echo "This is a boolean: ";
		var_dump($thing);
	}
	 elseif (is_array($thing)) {
		echo "This is an array: ";
		print_r($thing);
	}
	 elseif (is_null($thing)) {
		echo "This value is NULL.\n";
	}
	 elseif (is_string($thing)) {
		echo "{$thing} is a string.\n";
	}
}