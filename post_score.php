<?php
// post_score.php
session_start();

$pageTitle = "Post Scores";
require 'includes/header.inc.php';
require_once 'includes/db_connection.inc.php';

// if (!isset($_SESSION['username'])) {
//     header('location: login.php');
// }
$player_id = $_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $course_id = $db->real_escape_string($_POST['courselist']);
    $date_played = $db->real_escape_string($_POST['date_played']);
    $holes_played = $db->real_escape_string($_POST['holes_played']);
    $score = $db->real_escape_string($_POST['score']);

    $sql = "INSERT INTO user_scores (course_id, score, holes_played,date_played,player_id)
    VALUES ('$course_id','$score', '$holes_played', '$date_played','$player_id')";
    $result = $db->query($sql);

    // echo $course;

}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="fas fa-home" href="user_mainPage.php" id="home" title="Home"></a>
            <a class="nav-item nav-link text-white" href="user_scores.php" id="user_scores"
                title="see your posted scores">Your
                scores&nbsp;&nbsp;&nbsp;</a>
            <a class="nav-item nav-link text-white" href="post_review.php" id="post_review"
                title="click to review a course">Review a course&nbsp;&nbsp;&nbsp;</a>
            <a class="nav-item nav-link text-white" href="course_reviews.php" id="course_reviews"
                title="see all course reviews">All course reviews&nbsp;&nbsp;&nbsp;</a>
            <a class="nav-item nav-link text-white" href="leaderboard.php" id="leaderboard"
                title="see current leaderboard">Leaderboard&nbsp;&nbsp;&nbsp;</a>
            <a class="nav-item nav-link text-white" href="home.php" id="logout" title="Logout">Logout</a>
        </div>
    </div>
</nav>
<form action="post_score.php" method="POST">
    <div class="form-group">
        <h3 class="score-post">Post your score</h3>
        <img src="images/scorecard.png" alt="image of golf score card" class="img-thumbnail">
        <label for="course" class="label-text">Course Played</label><br>
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
        <label for="holes_played" class="label-text"># of holes played</label><br>
        <input type="radio" id="holes_played" name="holes_played" value="9" title="choose 9 holes">
        <label for="9" class="label-text">9 Holes</label><br>
        <input type="radio" name="holes_played" id="holes_played" value="18" title="choose 18 holes">
        <label for="18" class="label-text">18 Holes</label><br>
        <label for="score" class="label-text">Score</label><br>
        <input type="number" required name="score" id="score" placeholder="your score"><br><br>
        <input type="submit" value="Post Score" class="btn btn-dark" title="Post your score">
        <div id="result"></div>
    </div>
</form>

<?php require 'includes/footer.inc.php';?>