<?php
// user_reviews.php
session_start();

$pageTitle = "User Course Reviews";
require_once 'includes/db_connection.inc.php';
require_once 'includes/header.inc.php';
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}

$user_id = $_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $course = $db->real_escape_string($_POST['course']);
    $course_review = $db->real_escape_string($_POST['course_review']);
    $holes_played = $db->real_escape_string($_POST['holes_played']);
    $date_played = $db->real_escape_string($_POST['date_played']);
    $rate_course = $db->real_escape_string($_POST['rate_course']);
    // $user_id = $db->real_escape_string($SESSION['id']);

    $sql = "INSERT INTO course_reviews (course,course_review,holes_played,date_played,rate_course,user_id)
    VALUES ('$course','$course_review','$holes_played','$date_played','$rate_course','$user_id')";

    // echo $sql;
    $result = $db->query($sql);
    if (!$result) {
        echo "<div>You don't have any reviews to post?</div>";
    } else {
        header('location: user_review.php');
    }
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-nav">
        <a class="text-white bg-dark" href="user_mainPage.php" id="home" title="Home">Home&nbsp;&nbsp;&nbsp;</a>
            <a class="text-white bg-dark" href="user_scores.php" id="user_scores" title="see your posted scores">Your scores&nbsp;&nbsp;&nbsp;</a>
        <!-- <a class="text-white bg-dark" href="user_reviews.php" id="login" title="click to login">Review a course&nbsp;&nbsp;&nbsp;</a>    -->
        <a class="text-white bg-dark" href="post_score.php" id="post_score" title="post a score">Post a scores&nbsp;&nbsp;&nbsp;</a>
        <a class="text-white bg-dark" href="course_reviews.php" id="course_reviews" title="see all course reviews">All course reviews&nbsp;&nbsp;&nbsp;</a>
        <a class="text-white bg-dark" href="leaderboard.php" id="leaderboard" title="see current leaderboard">Leaderboard&nbsp;&nbsp;&nbsp;</a>
        <a class="text-white bg-dark" href="home.php" id="logout" title="Logout">Logout</a>

    </div>
</nav>
<div class="review-container">
    <h1 class="review-post">Review a Course</h1>
        <form class="review-form" action="user_review.php" method="POST">
            <label for="course" class="label-text">Course Played</label><br>
            <input type="text" required name="course" id="course" placeholder="course"><br><br>
            <label for="date_played" class="label-text">Date Played</label><br>
            <input type="date" required name="date_played"  id="date_played"><br><br>
            <label for="holes_played" class="label-text"># of holes played</label><br>
            <input type="radio" id="holes_played" name="holes_played" value="9" title="choose 9 holes">
            <label for="9" class="label-text">9 Holes</label><br>
            <input type="radio" name="holes_played" id="holes_played" value="18" title="choose 18 holes">
            <label for="18" class="label-text">18 Holes</label><br>
            <label for="course_review" class="label-text">Review</label><br>
            <input type="text" name="course_review" id="course_review" size="50" placeholder="your review here"><br><br>
            <label for="rate_course" class="label-text">How do you rate the course</label><br>
            <input type="radio" id="rate_course" name="rate_course" value="AbovePar" title="Above par">
            <label for="abovepar" class="label-text">Above Par</label><br>
            <input type="radio" name="rate_course" id="rate_course" value="par" title="Par">
            <label for="par" class="label-text">Par</label><br>
            <input type="radio" name="rate_course" id="rate_course" value="belowpar" title="Below par">
            <label for="belowpar" class="label-text">Below Par</label><br>
            <input type="submit" value="Post Review"  title="Click to post review">
        </form>
</div>
<?php require 'includes/footer.inc.php'?>