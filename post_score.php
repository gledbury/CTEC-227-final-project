<?php
// post_score.php
session_start();

$pageTitle = "Post Scores";
require 'includes/header.inc.php';
require_once 'includes/db_connection.inc.php';

if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
// $user_id = $_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $course_played = $db->real_escape_string($_POST['course_played']);
    $date_played = $db->real_escape_string($_POST['date_played']);
    $number_holes = $db->real_escape_string($_POST['number_holes']);
    $course_score = $db->real_escape_string($_POST['course_score']);

    // $sql = "INSERT INTO user_scores (course_played,date_played,number_holes,course_score,user_id)
    // VALUES ('$course_played','$date_played','$number_holes','$course_score','$user_id')";
    $sql = "INSERT INTO user_scores (course_played,date_played,number_holes,course_score,user_id)
    VALUES ('$course_played','$date_played','$number_holes','$course_score','{$_SESSION['id']}')";
    // echo $sql;
    $result = $db->query($sql);
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-nav">
        <a class="text-white bg-dark" href="user_mainPage.php" id="home" title="Home">Home&nbsp;&nbsp;&nbsp;</a>
        <a class="text-white bg-dark" href="user_scores.php" id="user_scores" title="see your posted scores">Your scores&nbsp;&nbsp;&nbsp;</a>

        <a class="text-white bg-dark" href="post_review.php" id="post_review" title="click to review a course">Review a course&nbsp;&nbsp;&nbsp;</a>
        <a class="text-white bg-dark" href="course_reviews.php" id="course_reviews" title="see all course reviews">All course reviews&nbsp;&nbsp;&nbsp;</a>
        <a class="text-white bg-dark" href="leaderboard.php" id="leaderboard" title="see current leaderboard">Leaderboard&nbsp;&nbsp;&nbsp;</a>
        <a class="text-white bg-dark" href="home.php" id="logout" title="Logout">Logout</a>

    </div>
</nav>
<!-- <script src="js/script.js"></script> -->
<div class="score-container">
    <h1 class="score-post">Post your golf scores</h1>
    <form class="score-form" action="user_scores.php" method="POST">
    <form class="score-form">
        <label for="course_played" class="label-text">Course Played</label><br>
        <input type="text" required name="course_played" id="course_played" placeholder="course"><br><br>
        <label for="date_played" class="label-text">Date Played</label><br>
        <input type="date" required name="date_played"  id="date_played"><br><br>
        <label for="number_holes" class="label-text"># of holes played</label><br>
        <input type="radio" id="number_holes" name="number_holes" value="9" title="choose 9 holes">
        <label for="9" class="label-text">9 Holes</label><br>
        <input type="radio" name="number_holes" id="number_holes" value="18" title="choose 18 holes">
        <label for="18" class="label-text">18 Holes</label><br>
        <label for="course_score" class="label-text">Score</label><br>
        <input type="number" required name="course_score" id="course_score" placeholder="your score"><br><br>
        <input type="submit" value="Post Score" title="Post your score">
        <div id="result"></div>
    </form>
</div>

<?php require 'includes/footer.inc.php';?>



