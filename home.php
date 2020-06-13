<?php
// home_page.php
session_start();
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
    <h1 class="welcome">Welcome to the Site <br><?/*= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : 'Please register or login.' */?></h1>
    <h2 class="welcome">Please register if you are a new user or login to access the site.</h2>
</div>
<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer src="js/script.js"></script>

<?php require 'includes/footer.inc.php' ?>