<?php
require_once 'includes/db_connection.inc.php';
// $sql = "SELECT * FROM course_reviews WHERE course_reviewed={$_GET['course_reviewed']}";
$sql = "SELECT * FROM course_reviews";
$result = $db->query($sql);

// $output = '';

// while ($row = $result->fetch_assoc()) {
//     $output .= "<option value='{$row["course"]}'>";
// }
// var_dump($result);
if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
}

$db->close();
// echo $output;
