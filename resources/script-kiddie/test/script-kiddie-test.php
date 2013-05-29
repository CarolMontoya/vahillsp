<?php

require_once dirname(__FILE__).'/../script-kiddie.php';

for($i = 0; $i < 1; $i++) {
  ScriptKiddie::checkIP('192.168.1.1');
  ScriptKiddie::checkIP('192.168.1.2');
}
ScriptKiddie::dumpBadAttempts();

?>
