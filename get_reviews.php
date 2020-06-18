<?php
require_once 'includes/db_connection.inc.php';
// $sql = "SELECT * FROM course_reviews WHERE course_reviewed={$_GET["course_reviewed"]}";
$sql = "SELECT course_reviews.id, course_reviews.course_reviewed, course_reviews.date_played, course_reviews.review, course_reviews.reviewer_id, courses.course, users.first_name, users.last_name FROM course_reviews AS course_reviews JOIN courses AS courses ON course_reviews.course_reviewed=courses.id JOIN users AS users ON course_reviews.reviewer_id=users.id WHERE course_reviewed={$_GET["course_reviewed"]}";
$result = $db->query($sql);
// $numrows = $result->num_rows;
// echo $numrows;
// if ($result->num_rows > 0) {
//     echo json_encode($result->fetch_assoc());
// }
$i = 1;
$data = [];
while ($i <= $result->num_rows) {
    array_push($data, $result->fetch_assoc());
    $i++;
}

echo json_encode($data);
$db->close();