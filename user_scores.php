<?php
// user_scores.php
session_start();

require 'includes/db_connection.inc.php';
require 'includes/header.inc.php';
require 'includes/functions.inc.php';
$pageTitle = "UserScores";
$userName = $_SESSION['first_name'];
$userId = $_SESSION['id'];
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="fas fa-home" href="user_mainPage.php" id="user_mainPage" title="Home"><span
                    class="sr-only">(current)</span></a>
            <a class="nav-item nav-link text-white" href="post_score.php" id="post_score" title="post a score">Post
                a score</a>
            <a class="nav-item nav-link text-white" href="post_review.php" id="post_review"
                title="review a course">Review a
                course</a>
            <a class="nav-item nav-link text-white" href="course_reviews.php" id="course_reviews"
                title="see all course reviews">All
                course reviews</a>
            <a class="nav-item nav-link text-white" href="leaderboard.php" id="leaderboard"
                title="see current leaderboard">Leaderboard</a>
            <a class="nav-item nav-link text-white" href="logout.php" id="logout" title="click to logout">Logout</a>
        </div>
    </div>
</nav>
<div class="container">
    <h3 class="score-title">Here are your scores.</h3>
    <img src="images/scorecard.png" alt="image of golf score card" class="score-img-thumbnail">
    <?php display_user_scores();?>
</div>

<?php require 'includes/footer.inc.php'?>