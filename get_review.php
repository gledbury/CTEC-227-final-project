<?php 
require_once 'includes/db_connection.inc.php';
$sql = "SELECT course,date_played,course_review FROM course_reviews WHERE course={$_GET['course']}";
$result = $db->query($sql);

// $output = '';

// while ($row = $result->fetch_assoc()) {
//     $output .= "<option value='{$row["course"]}'>";
// }

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
}

$db->close();
// echo $output;



?>