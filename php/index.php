<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db = new mysqli(
    getenv('DB_HOST'),       // e.g. mysql
    getenv('DB_USERNAME'),   // user: normal
    getenv('DB_PASSWORD'),   // password: your password
    getenv('DB_DATABASE')    // database name: normal
);

if ($db->connect_error) {
    echo 'MySQL connection error: ' . $db->connect_error;
} else {
    echo 'Hello PHP Site! MySQL Status: Connected';
}
?>
