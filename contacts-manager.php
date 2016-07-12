<?php

$contacts = [];

$filename = 'contacts.txt';

$contents = trim(file_get_contents($filename));

$contentsArray = explode("\n", $contents);

$keys = ['name', 'number'];

foreach ($contentsArray as $value) {
	$contacts[] = array_combine($keys, explode('|', $value));
}

function formatContacts(&$contacts) {
	$contactsString = '';
	foreach ($contacts as $contact) {
		$contactsString .= "{$contact['name']} | {$contact['number']}\n";
	}
	return $contacts = $contactsString;
}

function displayContacts($contacts) {
	formatContacts($contacts);
	fwrite(STDOUT,
		"Name | Phone number\n" .
		"-------------------\n" .
		$contacts
	);
}

function addContact($name, $number) {
	$contactArray = [];
	$newContact = "{$name}|{$number}\n";
	fwrite(STDOUT, "New contact added: \n");
	$contactInfo = explode('|', $newContact);
	$newName = $contactInfo[0];
	$newNumber = $contactInfo[1];
	$contactArray[] = ['name' => $newName, 'number' => $newNumber];
	displayContacts($contactArray);
	return $newContact;
}

function findContact($contacts, $contact) {

}

function deleteContact() {
	
}

do {
	fwrite(STDOUT,
		'1. View contacts.' . PHP_EOL .
		'2. Add a new contact.' . PHP_EOL .
		'3. Search for contact by name.' . PHP_EOL .
		'4. Delete an existing contact.' . PHP_EOL .
		'5. Exit.' . PHP_EOL .
		'Enter an option (1, 2, 3, 4 or 5): ' . PHP_EOL
		);

	$menuOption = fgets(STDIN);

	switch ($menuOption) {
		case 1:
			fwrite(STDOUT, displayContacts($contacts) . PHP_EOL);
			break;
		case 2:
			fwrite(STDOUT, 'Please enter contact name: ');
			$name = trim(fgets(STDIN));
			fwrite(STDOUT, 'Please enter contact number: ');
			$number = trim(fgets(STDIN));
			addContact($name, $number);
			break;
		case 3:
			// call appropriate function
			break;
		case 4:
			// call appropriate function
			break;
	}
} while ($menuOption != 5);