<?php

function parseContacts($filename)
{
	$contacts = array();

	$handle = fopen($filename, 'r');

	$contents = fread($handle, filesize($filename));

	$contentsArray = explode("\n", trim($contents));

	$keys = ['name', 'number'];

	foreach ($contentsArray as $value) {
		$contacts[] = array_combine($keys, explode('|', $value));
	}

	foreach ($contacts as &$contact) {
		$contact['number'] = substr_replace($contact['number'], '-', 3, 0);
		$contact['number'] = substr_replace($contact['number'], '-', 7, 0);
	}

	fclose($handle);

	return $contacts;
}

var_dump(parseContacts('contacts.txt'));
