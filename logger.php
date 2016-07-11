<?php

function logMessage($logLevel, $message)
{
	$filename = 'log' . '-' . date('Y', time()) . '-' . date('m', time()) . '-' . date('d', time()) . '.log' . PHP_EOL;

    $handle = fopen($filename, 'a');

    fclose($handle);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");
