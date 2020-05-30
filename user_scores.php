<?php
// user_scores.php
session_start();

$pageTitle= "User Scores";
require_once('includes/db_connection.inc.php');
require_once('includes/header.inc.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $course_played = $db->real_escape_string($_POST['course_played']);   
    $date_played = $db->real_escape_string($_POST['date_played']);
    $number_holes = $db->real_escape_string($_POST['number_holes']);
    $course_score = $db->real_escape_string($_POST['course_score']);

    $sql = "INSERT INTO user_scores (course_played,date_played,number_holes,course_score)
    VALUES ('$course_played','$date_played','$number_holes','$course_score')";
    // echo $sql;
    $result = $db->query($sql);

    // if (!$result) {
    //     echo "<div>You don't have any score to post?</div>";
    // } else {
    //     header ('location: user_scores.php');
    // }
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-nav">    
        <a class="text-white bg-dark" href="user_scores.php" id="register" title="click to register">Post your scores</a>
        <a class="text-white bg-dark" href="user_reviews.php" id="login" title="click to login">Review a course</a>
    </div>
</nav>
<h1>Post your golf scores</h1>
<form action="user_scores.php" method="POST">
    <label for="course_played">Course Played</label>
    <input type="text" required name="course_played" id="course_played"><br>
    <label for="date_played">Date Played</label>
    <input type="date" required name="date_played"  id="date_played"><br>
    <label for="number_holes"># of holes played</label><br>
    <input type="radio" id="number_holes" name="number_holes" value="9">
    <label for="9">9 Holes</label><br>
    <input type="radio" name="number_holes" id="number_holes" value="18">
    <label for="18">18 Holes</label><br>
    <label for="course_score">Score</label>
    <input type="number" name="course_score" id="course_score" min="27" max="200">
    <br>
    <input type="submit" value="Post Score">
</form>
<?php require 'includes/footer.inc.php'; ?>



