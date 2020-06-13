<?php
require_once 'includes/db_connection.inc.php';
$sql = "SELECT course,course_review FROM course_reviews";
$result = $db->query($sql);

$output = '';

while ($row = $result->fetch_assoc()) {
    $output .= "<option value='{$row["course"]}'>";
}

$db->close();
