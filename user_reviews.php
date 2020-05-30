<?php 
// user_reviews.php
session_start();

$pageTitle = "User Course Reviews";
require_once('includes/db_connection.inc.php');
require_once('includes/header.inc.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $course = $db->real_escape_string($_POST['course']);
    $course_review = $db->real_escape_string($_POST['course_review']);
    $holes_played = $db->real_escape_string($_POST['holes_played']);
    $the_date_played = $db->real_escape_string($_POST['the_date_played']);
    $rate_course = $db->real_escape_string($_POST['rate_course']);

    $sql = "INSERT INTO course_reviews (course,course_review,holes_played,the_date_played,rate_course)
    VALUES ('$course','$course_review','$holes_played','$the_date_played','$rate_course')";

    // echo $sql;
    $result = $db->query($sql);
    if (!$result) {
        echo "<div>You don't have any reviews to post?</div>";
    } else {
        header ('location: course_reviews.php');
    }
}
?>

<h1>Review course played</h1>
<form action="user_reviews.php" method="POST">
    <label for="course">Course Played</label>
    <input type="text" required name="course" id="course"><br>
    <label for="the_date_played">Date Played</label>
    <input type="date" required name="the_date_played"  id="the_date_played"><br>
    <label for="holes_played"># of holes played</label><br>
    <input type="radio" id="holes_played" name="holes_played" value="9">
    <label for="9">9 Holes</label><br>
    <input type="radio" name="holes_played" id="holes_played" value="18">
    <label for="18">18 Holes</label><br>
    <label for="course_review">Review</label>
    <input type="text" name="course_review" id="course_review" size="50"><br>
    <label for="rate_course">How do you rate the course</label><br>
    <input type="radio" id="rate_course" name="rate_course" value="AbovePar">
    <label for="abovepar">Above Par</label><br>
    <input type="radio" name="rate_course" id="rate_course" value="par">
    <label for="par">Par</label><br>
    <input type="radio" name="rate_course" id="rate_course" value="belowpar">
    <label for="belowpar">Below Par</label><br>
    <input type="submit" value="Post Review">
</form>
<?php require 'includes/footer.inc.php' ?>