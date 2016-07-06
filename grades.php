<?php

function prompt($prompt) {
    fwrite(STDOUT, $prompt);
    return STDIN;
}

function confirm($confirm) {
    fwrite(STDOUT, $confirm . "yes/no \n");
    if (STDIN == trim('yes')) {
        return true;
    } elseif (STDIN == trim('no')) {
        return false;
    } else {
        fwrite(STDOUT, $confirm . "yes/no \n");
    }
}

prompt('What is your name? ');
$studentName = fgets(STDIN);

do {
    prompt('What is the name of the subject? ');
    $name = fgets(STDIN);
    prompt('What is the grade? ');
    $grade = fgets(STDIN);
} while (confirm('Do you want to add another grade? '));

$average = fgets(STDIN);