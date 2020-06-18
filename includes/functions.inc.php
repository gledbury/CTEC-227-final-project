<?php
// $db = new mysqli('localhost','root','','golf');

function display_user_scores()
{
    $db = new mysqli('localhost', 'root', '', 'golf');

    $sql = "SELECT user_scores.score, user_scores.holes_played, user_scores.date_played, courses.course FROM user_scores AS user_scores JOIN courses AS courses ON user_scores.course_id=courses.id WHERE user_scores.player_id = {$_SESSION['id']} ORDER BY user_scores.date_played ASC";

    $result = $db->query($sql);

    while ($row = $result->fetch_assoc()) {
        $course = $row['course'];
        $score = $row['score'];
        $holes = $row['holes_played'];
        $date = $row['date_played'];
        echo "<p class='user-scores'>&nbsp;Course: $course&nbsp;<br>&nbsp;Score: $score &nbsp;&nbsp;<br>&nbsp;Holes Played: $holes<br>&nbsp;Date Played: $date &nbsp;<br></p>";
    }

}

function leaderboard()
{
    $db = new mysqli('localhost', 'root', '', 'golf');

    $sql = "SELECT user_scores.score, user_scores.holes_played, user_scores.date_played, courses.course,users.first_name,users.last_name FROM user_scores AS user_scores JOIN courses AS courses ON user_scores.course_id=courses.id JOIN users AS users ON user_scores.player_id=users.id WHERE user_scores.player_id=users.id ORDER BY user_scores.score ASC";
    $result = $db->query($sql);

    while ($row = $result->fetch_assoc()) {
        $course = $row['course'];
        $score = $row['score'];
        $holes = $row['holes_played'];
        $date = $row['date_played'];

        $firstName = $row['first_name'];
        $lastName = $row['last_name'];

        echo "<p class='leaderboard-text'>&nbsp;Score: $score<br>&nbsp;Course: $course&nbsp;&nbsp;<br>&nbspHoles Played: $holes<br>&nbsp;Date Played: $date &nbsp;&nbsp;<br>&nbspPlayer: $firstName $lastName</p>";
    }

}