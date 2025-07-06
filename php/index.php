<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$db = new mysqli(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB_NAME'));
echo 'Hello PHP Site! MySQL Status: ' . ($db->connect_error ? $db->connect_error : 'Connected');

?>
