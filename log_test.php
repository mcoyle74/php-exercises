<?php

require_once 'Log.php';

$log = new Log();

$log->filename = 'log-' . date('Y-m-d') . '.log';

$log->info('This is a test. Do not panic.');
$log->error('Beware the dark side. A Jedi uses the force for knowledge and defense, never for attack.')

?>