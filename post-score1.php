<?php 
session_start();
$db = new mysqli('localhost','root','','golf');
$db->set_charset('utf8');

$user_id = $_SESSION['id'];
$course_played = $_POST['course_played'];
$date_played = $_POST['date_played'];
$number_holes = $_POST['number_holes'];
$course_score = $_POST['course_score'];

$sql = "INSERT INTO user_scores (course_played,date_played,number_holes,course_score,user_id)
VALUES ('$course_played','$date_played','$number_holes','$course_score','$user_id')";

$result = $db->query($sql);

if ($result) {
    echo json_encode(['status' => 'ok']);
} else {
    echo json_encode(['status' => 'bad']);
}
?>