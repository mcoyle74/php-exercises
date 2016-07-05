<?php

fwrite(STDOUT, 'Choose a starting number: ');
$startNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'Choose an ending number: ');
$endNumber =  trim(fgets(STDIN));
fwrite(STDOUT, 'Choose an increment: ');
$increment = trim(fgets(STDIN));

for ($i = $startNumber; $i <= $endNumber; $i += $increment) {
	echo "{$i}\n";
}
