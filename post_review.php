<?php
// user_reviews.php
session_start();

$pageTitle = "User Course Reviews";
require_once 'includes/db_connection.inc.php';
require_once 'includes/header.inc.php';
// if (!isset($_SESSION['username'])) {
//     header('location: login.php');
// }

$reviewer_id = $_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $course_reviewed = $db->real_escape_string($_POST['courselist']);
    $review = $db->real_escape_string($_POST['review']);
    $date_played = $db->real_escape_string($_POST['date_played']);

    $sql = "INSERT INTO course_reviews (course_reviewed,date_played,review,reviewer_id)
    VALUES ('$course_reviewed','$date_played','$review','$reviewer_id')";
    $result = $db->query($sql);
}
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
            <a class="nav-item nav-link text-white" href="post_score.php" id="post_score" title="post a score">Post a
                score</a>
            <a class="nav-item nav-link text-white" href="course_reviews.php" id="course_reviews"
                title="see all course reviews">All course reviews</a>
            <a class="nav-item nav-link text-white" href="leaderboard.php" id="leaderboard"
                title="see current leaderboard">Leaderboard</a>
            <a class="nav-item nav-link text-white" href="home.php" id="logout" title="Logout">Logout</a>
        </div>
    </div>
</nav>
<form action="post_review.php" method="POST">
    <div class="form-group">
        <h3 class="score-post">Review a Course</h3>
        <img src="images/golf.jpg" alt="image of golf course" class="img-thumbnail">
        <label for="course" class="label-text">Course to Review</label><br>
        <select name="courselist" id="course">
            <option value="">*select a course*</option>
            <option value="1">Camas Meadows</option>
            <option value="2">Cedars</option>
            <option value="3">Heron Lakes</option>
            <option value="4">Lewis River</option>
            <option value="5">Tri-Mountain</option>
            <option value="6">Mt. View</option>
            <option value="7">Mint Valley</option>
            <option value="8">Broodmore</option>
            <option value="9">Wildwood</option>
            <option value="10">Colwood</option>
            <option value="11">Rose City</option>
            <option value="12">Bandon Dunes</option>
            <option value="13">Pumpkin Ridge</option>
        </select><br><br>
        <label for="date_played" class="label-text">Date Played</label><br>
        <input type="date" required name="date_played" id="date_played"><br><br>
        <label for="review" class="label-text">Review</label><br>
        <textarea name="review" id="review" cols="30" rows="5" placeholder="Write your review here"></textarea><br><br>
        <input type="submit" value="Post Review" title="Click to post review">
    </div>
</form>

<?php require 'includes/footer.inc.php'?>