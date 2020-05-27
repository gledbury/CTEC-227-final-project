<?php 
// db_connection.inc.php
// create a new connection to the database
$db = new mysqli('localhost', 'root', '', 'golf');

// if therte is an error connecting to the database
if ($db->connect_error) {
    $error = $db->connect_error;
    echo $error;
}

// set the char encoding of the database to UTF-8
$db->set_charset('utf8');
?>