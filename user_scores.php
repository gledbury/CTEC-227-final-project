<?php
// user_scores.php
session_start();

$pageTitle= "User Scores";
require_once('includes/db_connection.inc.php');
require_once('includes/header.inc.php');
$user_id = $_SESSION['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $course_played = $db->real_escape_string($_POST['course_played']);   
    $date_played = $db->real_escape_string($_POST['date_played']);
    $number_holes = $db->real_escape_string($_POST['number_holes']);
    $course_score = $db->real_escape_string($_POST['course_score']);

    $sql = "INSERT INTO user_scores (course_played,date_played,number_holes,course_score,user_id)
    VALUES ('$course_played','$date_played','$number_holes','$course_score','$user_id')";
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
        <a class="text-white bg-dark" href="home.php" id="home" title="Home">Home</a>
        <a class="text-white bg-dark" href="user_reviews.php" id="user_reviews" title="click to review a course">Review a course</a>
        <a class="text-white bg-dark" href="home.php" id="logout" title="Logout">Logout</a>

    </div>
</nav>
<div class="score-container">
    <h1 class="score-post">Post your golf scores</h1>
    <form class="score-form" action="user_scores.php" method="POST">
        <label for="course_played">Course Played</label>
        <input type="text" required name="course_played" id="course_played" placeholder="course"><br>
        <label for="date_played">Date Played</label>
        <input type="date" required name="date_played"  id="date_played"><br>
        <label for="number_holes"># of holes played</label><br>
        <input type="radio" id="number_holes" name="number_holes" value="9" title="choose 9 holes">
        <label for="9">9 Holes</label><br>
        <input type="radio" name="number_holes" id="number_holes" value="18" title="choose 18 holes">
        <label for="18">18 Holes</label><br>
        <label for="course_score">Score</label>
        <input type="number" required name="course_score" id="course_score" placeholder="your score">
        <br>
        <input type="submit" value="Post Score" title="Post your score">
    </form>
</div>
<?php require 'includes/footer.inc.php'; ?>



