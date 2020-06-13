<?php
// $db = new mysqli('localhost','root','','golf');

function display_user_scores()
{
    $db = new mysqli('localhost', 'root', '', 'golf');
    // $userName = $_SESSION['id'];

    $sql = "SELECT course_played, date_played, number_holes, course_score, user_id FROM user_scores WHERE user_scores.user_id = {$_SESSION['id']}";
    $result = $db->query($sql);

    while ($row = $result->fetch_assoc()) {
        $userid = $row['user_id'];
        $course = $row['course_played'];
        $date = $row['date_played'];
        $score = $row['course_score'];
        $holes = $row['number_holes'];
        echo "<h3>Course Played: " . $course . "</h3>";
        echo "<h5>Date Played: " . $date . "</h5>";
        echo "<h5>Holes Played: " . $holes . "</h5>";
        echo "<h4>Posted Score: " . $score . "</h4><br>";
    }

}

function leaderboard()
{
    $db = new mysqli('localhost', 'root', '', 'golf');

    $sql = "SELECT course_played, date_played, number_holes, course_score, user_id FROM user_scores ORDER BY course_score ASC";
    $result = $db->query($sql);

    while ($row = $result->fetch_assoc()) {
        // $player = $row['user_id'];

        $course = $row['course_played'];
        $date = $row['date_played'];
        $score = $row['course_score'];
        $holes = $row['number_holes'];
        echo "<h4>$course-$score<br>$date $holes holes</h4><br>";
    }

}
