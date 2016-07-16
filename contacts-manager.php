<?php

function getFileContentsAndConvertToArray($filename) {
	clearstatcache('contacts.txt');
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
		foreach ($contacts as &$contact) {
			if (strlen($contact['number']) == 10) {
				$contact['number'] = substr_replace($contact['number'], '-', 3, 0);
				$contact['number'] = substr_replace($contact['number'], '-', 7, 0);
			} else {
				$contact['number'] = substr_replace($contact['number'], '-', 3, 0);
			}
		}
		foreach ($contacts as &$contact) {
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

function addContact() {
	do {
		fwrite(STDOUT, 'Please enter contact name: ');
		$name = trim(fgets(STDIN));
	} while ($name == '');
	do {
		fwrite(STDOUT, 'Please enter contact number (7 or 10 digits, numbers only): ');
		$number = trim(fgets(STDIN));
		echo strlen($number) . PHP_EOL;
	} while ((strlen($number) != 7) && (strlen($number) != 10)); 
	$newContact = "{$name}|{$number}\n";
	$filename = 'contacts.txt';
	$handle = fopen($filename, 'a');
	fwrite($handle, $newContact);
	fclose($handle);
	return "\n{$name} added to contacts.\n";
}

function findContact($contacts, $name) {
	foreach ($contacts as $contact) {
		if ($contact['name'] == $name) {
			$result = implode(' | ', $contact);
			return displayContacts($result);
		}
	}
	return "{$name} not found.\n";
}

function deleteContact($nameToDelete) {
	$contacts = getFileContentsAndConvertToArray('contacts.txt');
	$handle = fopen('contacts.txt', 'w');
	foreach ($contacts as $contact) {
		if ($contact['name'] != $nameToDelete) {
			fwrite($handle, $contact['name'] . '|' . $contact['number'] . PHP_EOL);
		} else {
			fwrite(STDOUT, "{$nameToDelete} removed from contacts.\n");
		}
	}
	fclose($handle);
}


do {
	$contacts = getFileContentsAndConvertToArray('contacts.txt');
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
			fwrite(STDOUT, addContact());
			break;
		case 3:
			fwrite(STDOUT, 'Please enter contact name: ');
			$name = trim(fgets(STDIN));
			fwrite(STDOUT, PHP_EOL . findContact($contacts, $name) . PHP_EOL . PHP_EOL);
			break;
		case 4:
			fwrite(STDOUT, displayContacts($contacts) . PHP_EOL);
			fwrite(STDOUT, 'Please enter the name of the contact you want to delete: ');
			$nameToDelete = trim(fgets(STDIN));
			fwrite(STDOUT, "Are you sure you want to delete {$nameToDelete}? (y/n) ");
			$confirm = trim(fgets(STDIN));
			if ($confirm == 'y') {
				deleteContact($nameToDelete);
			}
			break;
	}
} while ($menuOption != 5);