<?php

$filename = 'contacts.txt';

$contacts = trim(file_get_contents($filename));

function formatContacts(&$contacts) {
	$contentsArray = explode("\n", $contacts);
	foreach ($contentsArray as &$contact) {
		$contact = substr_replace($contact, ' | ', strpos($contact, '|'), 1);
	}
	$contacts = implode("\n", $contentsArray);

	return $contacts;
}

function showAllContacts($contacts) {
	formatContacts($contacts);
	fwrite(STDOUT, "Name | Phone number\n");
	fwrite(STDOUT, "-------------------\n");
	fwrite(STDOUT, $contacts . PHP_EOL);
}

function addContact() {
	
}

function findContact() {
	
}

function deleteContact() {
	
}

do {
	fwrite(STDOUT, '1. View contacts.' . PHP_EOL);
	fwrite(STDOUT, '2. Add a new contact.' . PHP_EOL);
	fwrite(STDOUT, '3. Search for contact by name.' . PHP_EOL);
	fwrite(STDOUT, '4. Delete an existing contact.' . PHP_EOL);
	fwrite(STDOUT, '5. Exit.' . PHP_EOL);
	fwrite(STDOUT, 'Enter an option (1, 2, 3, 4 or 5): ' . PHP_EOL);

	$menuOption = fgets(STDIN);

	switch ($menuOption) {
		case 1:
			fwrite(STDOUT, showAllContacts($contacts) . PHP_EOL);
			break;
		case 2:
			echo 'Please enter contact name: ';
			$name = trim(fgets(STDIN));
			echo 'Please enter contact number: ';
			$number = trim(fgets(STDIN));
			break;
		case 3:
			// call appropriate function
			break;
		case 4:
			// call appropriate function
			break;
	}
} while ($menuOption != 5);