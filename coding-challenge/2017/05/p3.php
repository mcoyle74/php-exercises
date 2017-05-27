<?php

/*
	Come up with a way to parse a given chemical formula string and break it down into its individual atomic parts.

	Example:
		input: "H2O"				input: "(BH3)2"
		output: "{H: 2, O: 1}"		ouput: "{B: 2, H: 6}"
*/

function parseChemicalFormula($formula) {

}

do {
	
	fwrite(STDOUT, 'Enter chemical formula: ');
	
	$formula = trim(fgets(STDIN));
	
	echo parseChemicalFormula($formula), PHP_EOL;
	
} while ($formula != 'q');
