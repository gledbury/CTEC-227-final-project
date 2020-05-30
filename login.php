<?php 
// login.php
session_start();
$pageTitle = 'Login';
require 'includes/header.inc.php';
require_once 'includes/db_connection.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $db->real_escape_string($_POST['username']);
    $password = hash('sha512', $db->real_escape_string($_POST['password']));

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    
    // echo $sql;
    $result = $db->query($sql);
    if ($result->num_rows ==1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header('location: user_mainPage.php');
        // echo "<p>logged in</p>";
    } else {
        echo "<p>please try again</p>";
    }
}
?>

<div class="login-container">
    <p>Please login in with your username and password.</p>
    <div class="container-login-fluid">
        <form class="login-form" action="login.php" method="POST">
            <div class="form-group">
                <label class="login-label" for="username">Username</label>
                <input type="text" class="form-control-sm" name="username" id="username" placeholder="username" required>
            </div>
            <div class="form-group">
                <label class="login-label" for="password">Password</label>
                <input type="password" class="form-control-sm" name="password" id="password" placeholder="password" required>
                <br>
                <span class="login-password" id="showPassword" onclick="showPassword();">Show Password</span>
            </div>
                <input class="btn btn-light" type="submit" value="Login" title="click to login">
        </form>
    </div>
</div>
<script src="js/script.js"></script>















