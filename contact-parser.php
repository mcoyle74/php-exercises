<?php

function parseContacts($filename)
{
	$contacts = array();

	// $handle = fopen($filename, 'r');

	// $contents = fread($handle, filesize($filename));

	// fclose($handle);

	// The above three lines can be replaced with the following single line: 
	$contents = trim(file_get_contents($filename));

	$contentsArray = explode("\n", trim($contents));

	$keys = ['name', 'number'];

	foreach ($contentsArray as $value) {
		$contacts[] = array_combine($keys, explode('|', $value));
	}

	foreach ($contacts as &$contact) {
		$contact['number'] = substr_replace($contact['number'], '-', 3, 0);
		$contact['number'] = substr_replace($contact['number'], '-', 7, 0);
	}

	return $contacts;
}

var_dump(parseContacts('contacts.txt'));
