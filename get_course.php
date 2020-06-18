<?php

require_once 'includes/db_connection.inc.php';
$sql = "SELECT * FROM courses";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
}
$db->close();