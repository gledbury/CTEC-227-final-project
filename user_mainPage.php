<?php 
// user_mainPage 
session_start();

$pageTitle = "UserMainPage";
$name = $_SESSION['first_name'];
require 'includes/header.inc.php';
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Main Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/51a20dfcb9.js" crossorigin="anonymous"></script>
</head> -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-nav">    
            <a class="text-white bg-dark" href="user_scores.php" id="register" title="click to register">Post your scores&nbsp;&nbsp;&nbsp;</a>
            <a class="text-white bg-dark" href="user_reviews.php" id="login" title="click to login">Review a course&nbsp;&nbsp;&nbsp;</a>
            <a class="text-white bg-dark" href="course_reviews.php" id="course_reviews" title="see all course reviews">All course reviews&nbsp;&nbsp;&nbsp;</a>
            <a class="text-white bg-dark" href="leaderboard.php" id="leaderboard" title="see current leaderboard">Leaderboard&nbsp;&nbsp;&nbsp;</a>
            <a class="text-white bg-dark" href="logout.php" id="logout" title="click to logout">Logout</a>
        </div>
    </nav>
    <div class="welcome">
        <?php echo "<h1>Welcome " . $name . "</h1>"; ?>
        
            
    </div>
    <?php require 'includes/footer.inc.php' ?>
</body>
