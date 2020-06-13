<?php
// user_mainPage
session_start();

require 'includes/db_connection.inc.php';
require 'includes/header.inc.php';
require 'includes/functions.inc.php';
$pageTitle = "UserMainPage";
$userName = $_SESSION['first_name'];
$userId = $_SESSION['id'];
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
?>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-nav">
            <!-- <a class="text-white bg-dark" href="home.php" id="home" title="Home">Home&nbsp;&nbsp;&nbsp;</a>     -->
            <a class="text-white bg-dark" href="user_scores.php" id="user_scores" title="see your posted scores">Your scores&nbsp;&nbsp;&nbsp;</a>

            <a class="text-white bg-dark" href="post_score.php" id="register" title="post a score">Post a score&nbsp;&nbsp;&nbsp;</a>
            <a class="text-white bg-dark" href="post_review.php" id="post_review" title="review a course">Review a course&nbsp;&nbsp;&nbsp;</a>
            <a class="text-white bg-dark" href="course_reviews.php" id="course_reviews" title="see all course reviews">All course reviews&nbsp;&nbsp;&nbsp;</a>
            <a class="text-white bg-dark" href="leaderboard.php" id="leaderboard" title="see current leaderboard">Leaderboard&nbsp;&nbsp;&nbsp;</a>
            <a class="text-white bg-dark" href="logout.php" id="logout" title="click to logout">Logout</a>
        </div>
    </nav>
    <div class="welcome">
        <?php echo "<h1>Hi " . $userName . "</h1>"; ?>
        <h2>Please post your scores or review a course.</h2>


    </div>
    <?php require 'includes/footer.inc.php'?>
</body>
