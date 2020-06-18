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
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link text-white" href="user_mainPage.php" id="home" title="Home">Home</a>
            <a class="nav-item nav-link text-white" href="user_scores.php" id="user_scores"
                title="see your posted scores">Your
                scores</a>

            <a class="nav-item nav-link text-white" href="post_review.php" id="post_review"
                title="review a course">Review a
                course</a>
            <a class="nav-item nav-link text-white" href="post_score.php" id="post_score" title="post a score">Post a
                score</a>
            <a class="nav-item nav-link text-white" href="course_reviews.php" id="course_reviews"
                title="see all course reviews">All
                course reviews</a>
            <a class="nav-item nav-link text-white" href="logout.php" id="logout" title="click to logout">Logout</a>
        </div>
    </div>
</nav>

<!-- <h3>Best scores posted!</h3> -->

<!-- <div class="container-leader"> -->
<img src="images/leaderboard.jpg" alt="image of golf leader board" class="leaderboard-image">

<?php leaderboard();?>
<!-- </div> -->