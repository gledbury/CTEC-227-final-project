<?php 

require_once 'includes/db_connection.inc.php';
$sql = "SELECT course,date_played,holes_played,rate_course,course_review FROM course_reviews WHERE course={$_GET["course"]}";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
}
$db->close();
?>