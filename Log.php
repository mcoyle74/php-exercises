<?php

class Log
{
	public $filename;
	public function logMessage($logLevel, $message) {
		// $filename = 'log-' . date('Y-m-d') . '.log';
		$filename = $this->filename;
		$handle = fopen($filename, 'a');
		$entry = date('Y-m-d H:i:s') . " [$logLevel]" . " $message" . PHP_EOL;
		fwrite($handle, $entry);
		fclose($handle);
	}
	public function info($message) {
		logMessage('INFO', $message);
	}
	public function error($message) {
		logMessage('ERROR', $message);
	}

}

?>