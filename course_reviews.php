<?php
session_start();
require_once 'includes/db_connection.inc.php';
require 'includes/header.inc.php';
require 'includes/functions.inc.php';
// require 'js/script.js';
$user = $_SESSION['first_name'];

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

            <a class="nav-item nav-link text-white" href="post_score.php" id="post_score" title="post a score">Post your
                scores</a>

            <a class="nav-item nav-link text-white" href="post_review.php" id="post_review" title="post a review">Review
                a
                course</a>
            <a class="nav-item nav-link text-white" href="leaderboard.php" id="leaderboard"
                title="see leaderboard">Leaderboard</a>
            <a class="nav-item nav-link text-white" href="logout.php" id="logout" title="click to logout">Logout</a>
        </div>
</nav>



<?php if (!isset($_SESSION['username'])) {
    header('location: login.php');
} else {
    echo '<h3 class="review-title" >Select a course to read the reviews</h3>';
}
?>
<div class="review-course">
    <label for="course"></label>
    <br>
    <select name="course" id="course"></select>
    <div id="reviews"></div>
    <script>
    const course = document.querySelector('#course')
    fetch('get_course.php')
        .then(response => response.json())
        .then(data => {
            let output = `<option value="">--Select a Course--</option>`
            data.forEach(c => {
                output += `<option value="${c.id}">${c.course}</option>`
            })
            course.innerHTML = output
        })

    course.addEventListener('change', () => {
        fetch('get_reviews.php?course_reviewed=' + course.value)
            .then(response => response.json())
            .then(course_reviews => {
                const review = document.querySelector('#reviews')
                let output = ''
                course_reviews.forEach(course => {
                    output +=
                        `<br><p class="reviewText">Reviews for ${course.course} Golf Course:</p>`
                    output += `<p class="reviewText">Review: ${course.review}</p>`
                    output +=
                        `<p class="reviewText">Reviewed By: ${course.first_name + ' ' + course.last_name}</p>`
                    output += `<p class="reviewText">Date Played: ${course.date_played}</p>`
                })
                review.innerHTML = output
            })
    })
    </script>
</div>
<?php require 'includes/footer.inc.php'?>