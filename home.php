<?php
// home_page.php
session_start();
$pageTitle = 'HomePage';
require 'includes/header.inc.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link text-white" href="register.php" id="register"
                title="click to register">Register</a>
            <a class="nav-item nav-link text-white" href="login.php" id="login" title="click to login">Login</a>
        </div>
</nav>

<div class="container-home">
    <h3 class="welcome">Welcome to the Golf score and review site.</h3>
    <img src="images/golf4.jpg" alt="image of golf ball" class="image-home">
    <!-- <div class="imagetext"> -->
    <p class="image-text">This is a site to record your golf scores.<br><br>
        Please register or log in to access the site.<br><br>
        Use our leaderboard to compare your scores with the other users.<br><br>
        Please leave a course review while you are hear, or read reviews from other users.</p>
    <!-- </div> -->

    <!-- <p class="welcomePara">Please register if you are a new user or login.</p> -->
</div>
<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer src="js/script.js"></script>

<?php require 'includes/footer.inc.php'?>