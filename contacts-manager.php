<?php

function getFileContentsAndConvertToArray($filename) {
	$contacts = [];
	$contents = trim(file_get_contents($filename));
	$contentsArray = explode("\n", $contents);
	$keys = ['name', 'number'];
	foreach ($contentsArray as $value) {
		$contacts[] = array_combine($keys, explode('|', $value));
	}
	return $contacts;
}

function formatContacts(&$contacts) {
		$contactsString = '';
		foreach ($contacts as $contact) {
			$contactsString .= "{$contact['name']} | {$contact['number']}\n";
		}
		return $contacts = $contactsString;
}

function displayContacts($contacts) {
	if (is_array($contacts)) {
		formatContacts($contacts);
	} 
	return
		"Name | Phone number\n" .
		"-------------------\n" .
		$contacts
	;
}

function addContact($name, $number) {
	$newContact = "{$name}|{$number}\n";
	$filename = 'contacts.txt';
	$handle = fopen($filename, 'a');
	fwrite($handle, $newContact);
	fclose($handle);
}

function findContact($contacts, $name) {
	// var_dump($contacts, $name);
	foreach ($contacts as $contact) {
		if ($contact['name'] == $name) {
			$result = implode(' | ', $contact);
			return displayContacts($result);
		}
	}
	return "{$name} not found.\n";
}

function deleteContact() {
	
}

$contacts = getFileContentsAndConvertToArray('contacts.txt');

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
			fwrite(STDOUT, 'Please enter contact name: ');
			$name = trim(fgets(STDIN));
			fwrite(STDOUT, findContact($contacts, $name) . PHP_EOL);
			break;
		case 4:
			// call appropriate function
					// call appropriate func
	break;
	}
} while ($menuOption != 5);