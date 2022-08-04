<?php
$worker = array("Fred", 35, "Wilma");
$other = $worker; // array isn't duplicated in memory

$worker[1] = 36; // array is copied in memory, value changed

?>