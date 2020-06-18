<?php
require_once 'includes/db_connection.inc.php';
$sql = "SELECT date_played,course_reviewed,review,reviewer_id FROM course_reviews";
$result = $db->query($sql);

$numrows = $result->num_rows;

if ($numrows) {
    $data = json_encode(["reviews" => $result->fetch_all(MYSQLI_ASSOC)]);
} else {
    $data = json_encode(["error" => "no reviews found"]);
}

echo $data;
