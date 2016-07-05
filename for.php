<?php

fwrite(STDOUT, 'Choose a starting number: ');
$startNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'Choose an ending number: ');
$endNumber =  trim(fgets(STDIN));
fwrite(STDOUT, 'Choose an increment: ');
$increment = trim(fgets(STDIN));

if ($increment != NULL) {
	if (is_numeric($startNumber) && is_numeric($endNumber) && is_numeric($increment)) {
		for ($i = $startNumber; $i <= $endNumber; $i += $increment) {
		echo "{$i}\n";
		}
	} else {
		fwrite(STDERR, "Values must be numeric.\n");
		exit(1);
	}
} else {
	for ($i = $startNumber; $i <= $endNumber; $i++) {
		echo "{$i}\n";
		}
}
