<?php
session_start();
require_once 'includes/db_connection.inc.php';
require 'includes/header.inc.php';
require 'includes/functions.inc.php';
// require 'js/script.js';
$user = $_SESSION['first_name'];

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-nav">
        <a class="text-white bg-dark" href="user_mainPage.php" id="home" title="Home">Home&nbsp;&nbsp;&nbsp;</a>
        <a class="text-white bg-dark" href="user-scores.php" id="user-scores" title="see your posted scores">Your scores&nbsp;&nbsp;&nbsp;</a>

        <a class="text-white bg-dark" href="post-score.php" id="post-score" title="post a score">Post your scores&nbsp;&nbsp;&nbsp;</a>

        <a class="text-white bg-dark" href="post-review.php" id="post-review" title="post a review">Review a course&nbsp;&nbsp;&nbsp;</a>
        <a class="text-white bg-dark" href="leaderboard.php" id="leaderboard" title="see leaderboard">Leaderboard&nbsp;&nbsp;&nbsp;</a>
        <a class="text-white bg-dark" href="logout.php" id="logout" title="click to logout">Logout</a>
    </div>
</nav>
<body>
    <?php if (!isset($_SESSION['username'])) {
    header('location: login.php');
} else {
    echo "<h1>Select a course to read the reviews</h1>";
}
?>

    <label for="course">Select a course</label>
    <br>
    <select name="course" id="course"></select>
    <div id="review"></div>
    <script>
        const course = document.querySelector('#course')

        fetch('get_reviews.php')
            .then(response => response.text())
            .then(data => {
                course.innerHTML = data
            })

        course.addEventListener('change', () => {
            fetch('get_reviews.php?course=' + course.value')
                .then(response => response.json())
                .then(data => {
                    const review = document.querySelector('#review')
                    let output = '<br><strong>Review for ${data.course}</strong>'
                    output += '<p>Course: ${data.course}</p>'
                    output += '<p>Date Played: ${data.date_played}</p>'
                    // output += '<p>Holes Played: ${data.holes_played}</p>'
                    // output += '<p>Course Rated: ${data.rate_course}</p>'
                    output += '<p>Course Review: ${data.course_review}</p>'
                    review.innerHTML = output
                })
        })

    </script>
</body>








