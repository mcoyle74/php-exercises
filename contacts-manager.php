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

function displayContacts(&$contacts) {
	$contactsString = '';
	$nameLengths = [];
	foreach ($contacts as &$contact) {
		$nameLengths[] = strlen($contact['name']);
		if (strlen($contact['number']) == 10) {
			$contact['number'] = substr_replace($contact['number'], '-', 3, 0);
			$contact['number'] = substr_replace($contact['number'], '-', 7, 0);
		} else {
			$contact['number'] = substr_replace($contact['number'], '-', 3, 0);
		}
	}
	$maxName = max($nameLengths);
	foreach ($contacts as &$contact) {
		$paddedName = str_pad($contact['name'], $maxName);
		$paddedNumber = str_pad($contact['number'], $maxName);
		$contactsString .= "{$paddedName} | {$paddedNumber}\n";
	}

	fwrite(STDOUT, 
		PHP_EOL . 
		str_pad('Name', $maxName) . ' | ' . 
		str_pad('Phone Number', $maxName) . PHP_EOL . 
		str_pad('-', ($maxName + 15), '-') . PHP_EOL . 
		$contactsString
	);
}

function addContact() {
	$contacts = getFileContentsAndConvertToArray('contacts.txt');
	fwrite(STDOUT, 'Please enter contact name: ');
	$name = trim(fgets(STDIN));
	foreach ($contacts as $contact) {
		if ($name == $contact['name']) {
			fwrite(STDOUT, "A contact named {$name} already exits. Do you want to overwrite it? (y/n): \n");
			$confirm = trim(fgets(STDIN));
			if ($confirm == 'y') {
				return overwriteContact($name);
			}
			addContact();
		}
	}
	while ($name == '') {
		fwrite(STDOUT, 'Contact names must not be empty. Please enter contact name: ');
		$name = trim(fgets(STDIN));
	}
	do {
		fwrite(STDOUT, 'Please enter contact number (7 or 10 digits, numbers only): ');
		$number = trim(fgets(STDIN));
		$length = strlen($number);
	} while (($length != 7) && ($length != 10));
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
			$result = [$contact];
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
			fwrite(STDOUT, PHP_EOL . "{$nameToDelete} removed from contacts.\n" . PHP_EOL);
		}
	}
	fclose($handle);
}

function overwriteContact($name) {
	$contacts = getFileContentsAndConvertToArray('contacts.txt');
	$handle = fopen('contacts.txt', 'w');
	foreach ($contacts as $contact) {
		if ($contact['name'] != $name) {
			fwrite($handle, $contact['name'] . '|' . $contact['number'] . PHP_EOL);
		}
	}
	fclose($handle);
	fwrite(STDOUT, 'Please enter contact number (7 or 10 digits, numbers only): ');
	$number = trim(fgets(STDIN));
	$length = strlen($number);
	if (($length == 7) || ($length == 10)) {
		$newContact = "{$name}|{$number}\n";
		$filename = 'contacts.txt';
		$handle = fopen($filename, 'a');
		fwrite($handle, $newContact);
		fclose($handle);
		fwrite(STDOUT, "Contact information for {$name} updated.\n");
	} else {
		overwriteContact($name);
	}
}


do {
	$contacts = getFileContentsAndConvertToArray('contacts.txt');
	fwrite(STDOUT,
		'1. View contacts.' . PHP_EOL .
		'2. Add a new contact.' . PHP_EOL .
		'3. Search for contact by name.' . PHP_EOL .
		'4. Delete an existing contact.' . PHP_EOL .
		'5. Exit.' . PHP_EOL .
		'Enter an option (1, 2, 3, 4 or 5): '
		);

	$menuOption = fgets(STDIN);

	switch ($menuOption) {
		case 1:
			fwrite(STDOUT, displayContacts($contacts) . PHP_EOL);
			break;
		case 2:
			fwrite(STDOUT, addContact() . PHP_EOL);
			break;
		case 3:
			fwrite(STDOUT, 'Please enter contact name: ');
			$name = trim(fgets(STDIN));
			fwrite(STDOUT, PHP_EOL . findContact($contacts, $name) . PHP_EOL);
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