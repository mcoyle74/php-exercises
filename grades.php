<?php

$students = [];
$grades = [];


function prompt($prompt) {
	fwrite(STDOUT, $prompt);
}

function confirm($confirm) {
	fwrite(STDOUT, $confirm . "(yes/no) \n");
}

function average($sum, $numberOfGrades) {
	return $sum / $numberOfGrades;
}

prompt('Student name? ');
$studentName = fgets(STDIN);
$students[] = $studentName;

do {
	prompt('What is the name of the subject? ');
	$name = fgets(STDIN);  
	prompt('What is the grade? ');
	$grade = fgets(STDIN);
	$grades[] = [$name => $grade];
	confirm('Do you want to add another grade? ');
	$confirmed = trim(fgets(STDIN));
} while ($confirmed == 'yes');

var_dump($students);
var_dump($grades);