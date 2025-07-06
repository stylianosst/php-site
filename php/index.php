<?php
$db = new mysqli(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB_NAME'));
echo 'Hello PHP Site! MySQL Status: ' . ($db->connect_error ? $db->connect_error : 'Connected');
?>
