<?php

function parseContacts($filename)
{
	$contacts = array();

	$filename = 'contacts.txt';

	$handle = fopen($filename, 'r');

	$contents = fread($handle, filesize($filename));

	$contentsArray = explode("\n", trim($contents));

	$keys = ['name', 'number'];

	foreach ($contentsArray as $value) {
		$contacts[] = array_combine($keys, explode('|', $value));
	}

	return $contacts;
}

var_dump(parseContacts('contacts.txt'));
