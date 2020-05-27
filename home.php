<?php
// home_page.php
$pageTitle = 'HomePage';
require 'includes/header.inc.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-nav">    
        <a class="text-white bg-dark" href="register.php" id="register" title="click to register">Register</a>
        <a class="text-white bg-dark" href="login.php" id="login" title="click to login">Login</a>
    </div>
</nav>
<div class="container-home">
    <p class="welcome">Welcome to the Site!</p>
    <p class="directions">Register or login to .</p>
</div>

<?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : '<p>Please register if you are a new user or login to access the site.</p>' ?>

<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer src="js/script.js"></script>

<?php require 'includes/footer.inc.php' ?>