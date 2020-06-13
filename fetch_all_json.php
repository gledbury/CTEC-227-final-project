<?php 
require_once 'includes/db_connection.inc.php';
$sql = "SELECT course, date_played,course_review FROM course_reviews";
$result = $db->query($sql);

$numrows = $result->num_rows;

if ($numrows) {
    $data = json_encode(["results" => $result->fetch_all()]);
} else {
    $data = json_encode(["error" => "no reviews found"]);
}

echo $data;


?>