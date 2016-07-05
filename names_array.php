<?php

$names = ['Emily', 'John', 'Michael', 'Ruben'];

echo 'There are ' . count($names) . " names in the array, and they are: \n";

$i = 0;

while ($i < count($names)) {
	echo $names[$i] . PHP_EOL;
	$i++;
}