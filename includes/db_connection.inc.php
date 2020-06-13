<?php 
// db_connection.inc.php
// create a new connection to the database
$db = new mysqli('localhost','root','','golf');

if ($db->connect_error) {
    $error = $db->connect_error;
}

// if(!$db) {
//     die("Connection Failed: " .mysqli_connect_error());
// }

// set the char encoding of the database to UTF-8
$db->set_charset('utf8');
?>