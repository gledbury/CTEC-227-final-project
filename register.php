<?php
// registration page
session_start();

$pageTitle = "Register";
require 'includes/header.inc.php';
require_once 'includes/db_connection.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $db->real_escape_string($_POST['first_name']);
    $last_name = $db->real_escape_string($_POST['last_name']);
    $email = $db->real_escape_string($_POST['email']);
    $username = $db->real_escape_string($_POST['username']);
    $password = hash('sha512', $db->real_escape_string($_POST['password']));

    $sql = "INSERT INTO users (first_name,last_name,email,username,password)
    VALUES('$first_name','$last_name','$email','$username','$password')";

    // echo $sql;
    $result = $db->query($sql);

    if (!$result) {
        echo "<div>There was a problem registering your account.</div>";
    } else {
        header('location: login.php');
        // echo $sql;
    }
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="fas fa-home" href="home.php" id="home" title="Home"></a>
        </div>
    </div>
</nav>
<div class="register-container">
    <h1 class="register">Register</h1>
    <form class="register-form" action="register.php" method="POST">
        <!-- <label class="register-label" for="first_name">First Name</label><br> -->
        <input type="text" id="first_name" required name="first_name" placeholder="first name"><br><br>
        <!-- <label class="register-label" for="last_name">Last Name</label><br> -->
        <input type="text" id="last_name" required name="last_name" placeholder="last name"><br><br>
        <!-- <label class="register-label" for="email">Email</label><br> -->
        <input type="email" id="email" required name="email" placeholder="email"><br><br>
        <!-- <label class="register-label" for="username">Username</label><br> -->
        <input type="text" id="username" required name="username" placeholder="username"><br><br>
        <!-- <label class="register-label" for="password">Password</label><br> -->
        <input type="password" id="password" required name="password" placeholder="password">
        <br>
        <input class="reg-button" type="submit" value="Register" title="Click to register">
    </form>
</div>
<!-- <?php require 'includes/footer.inc.php';?> -->