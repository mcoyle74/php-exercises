<?php

function logMessage($logLevel, $message)
{
	$filename = 'log-' . date('Y-m-d') . '.log';

	$handle = fopen($filename, 'a');

	$entry = date('Y-m-d H:i:s') . " [$logLevel]" . " $message" . PHP_EOL;

	fwrite($handle, $entry);

	fclose($handle);

}

function logInfo($message) {
	logMessage('INFO', $message);
}

function logError($message) {
	logMessage('ERROR', $message);
}

logInfo("This is an info message, but it's short on info.");
logError("This is the error message you fear.");
