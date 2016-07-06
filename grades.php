<?php

$students = [];
$subjects = [];
$grades = [];
$sum = 0;


function prompt($prompt) {
	fwrite(STDOUT, $prompt);
}

function confirm($confirm) {
	fwrite(STDOUT, $confirm . "(y/n) \n");
}

function average($sum, $numberOfGrades) {
	return $sum / $numberOfGrades;
}

prompt('Student name? ');
$studentName = trim(fgets(STDIN));
$students[] = $studentName;

do {
	prompt('What is the name of the subject? ');
	$name = trim(fgets(STDIN));  
	$subjects[] = $name;
	prompt('What is the grade? ');
	$grade = trim(fgets(STDIN));
	$grades[] = $grade;
	confirm('Do you want to add another grade? ');
	$confirmed = trim(fgets(STDIN));
} while ($confirmed == 'y');

for ($i = 0; $i < count($grades); $i++) {
	$sum += $grades[$i];
}

echo "{$studentName}'s average: " . average($sum, count($grades)) . PHP_EOL;