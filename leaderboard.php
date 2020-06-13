<?php
session_start();
require 'includes/header.inc.php';
require 'includes/functions.inc.php';
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
$userFirst = $_SESSION['first_name'];
$userLast = $_SESSION['last_name'];
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-nav">
        <a class="text-white bg-dark" href="user_mainPage.php" id="home" title="Home">Home&nbsp;&nbsp;&nbsp;</a>
        <a class="text-white bg-dark" href="user_scores.php" id="user_scores" title="see your posted scores">Your scores&nbsp;&nbsp;&nbsp;</a>

        <a class="text-white bg-dark" href="course_review.php" id="course_review" title="review a course">Review a course&nbsp;&nbsp;&nbsp;</a>
        <a class="text-white bg-dark" href="post_score.php" id="post_score" title="post a score">Post your scores&nbsp;&nbsp;&nbsp;</a>
        <a class="text-white bg-dark" href="course_reviews.php" id="course_reviews" title="see all course reviews">All course reviews&nbsp;&nbsp;&nbsp;</a>
        <a class="text-white bg-dark" href="logout.php" id="logout" title="click to logout">Logout</a>
    </div>
</nav>

<h1 style="color:black; text-align:center;">The best user scores!</h1>
<?php leaderboard();?>