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
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link text-white" href="post_score.php" id="post_score" title="post a score">Post a
                score</a>
            <a class="nav-item nav-link text-white" href="user_scores.php" id="user_scores"
                title="see your posted scores">Your
                scores</a>
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
<div class="welcome">
    <?php echo "<h1>Welcome " . $userName . "</h1>"; ?>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/golfclubs.jpg" class="d-block w-100" style="width:500px;height:80vh"
                alt="image of golf clubs">
        </div>
        <div class="carousel-item">
            <img src="images/golfball5.jpg" class="d-block w-100" style="width:1200px;height:80vh"
                alt="image of a golf ball">
        </div>
        <div class="carousel-item">
            <img src="images/golfball.jpg" class="d-block w-100" style="width:500px;height:80vh"
                alt="image of a golfball">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



<?php require 'includes/footer.inc.php'?>
</body>