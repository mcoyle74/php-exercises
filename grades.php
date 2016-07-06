<?php

function prompt($prompt) {
	fwrite(STDOUT, $prompt);
}

function confirm($confirm) {
	fwrite(STDOUT, $confirm . "(yes/no) \n");
}

prompt('What is your name? ');
$studentName = fgets(STDIN);

do {
	prompt('What is the name of the subject? ');
	$name = fgets(STDIN);
	prompt('What is the grade? ');
	$grade = fgets(STDIN);
	confirm('Do you want to add another grade? ');
	$confirmed = trim(fgets(STDIN));
} while ($confirmed == 'yes');

echo "done\n";