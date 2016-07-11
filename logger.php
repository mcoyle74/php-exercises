<?php

function logMessage($logLevel, $message)
{
	$filename = 'log' . '-' . date('Y-m-d', time()) . '.log';

	$handle = fopen($filename, 'a');

	$entry = '';

	$entry = date('Y-m-d H:i:s', time()) . " [{$logLevel}]" . " {$message}" . PHP_EOL;

	fwrite($handle, $entry);

	fclose($handle);

}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");
