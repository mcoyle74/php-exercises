<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
	if (is_int($thing)) {
		echo "{$thing}\n";
	} elseif (is_float($thing)) {
		echo "{$thing}\n";						
	}
	 elseif (is_bool($thing)) {
		echo "{$thing}\n";
	}
	 elseif (is_array($thing)) {
	 	echo 'Array (';
	 	foreach ($thing as $value) {
			echo " {$value} ";
	 	}
	 	echo ')' . PHP_EOL;
	}
	 elseif (is_null($thing)) {
		echo "{$thing}\n";
	}
	 elseif (is_string($thing)) {
		echo "{$thing}\n";
	}
}

// foreach ($things as $thing) {
// 	if (is_scalar($thing)) {
// 		if (is_bool($thing)) {
// 			var_dump($thing);
// 		} else {
// 			echo $thing . PHP_EOL;
// 		}
// 	}
// }