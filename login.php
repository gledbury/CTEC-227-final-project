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

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];
        header('location: user_mainPage.php');
        // var_dump($sql);
        // echo "<p>logged in</p>";
    } else {
        echo "<p>please try again</p>";
    }
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-nav">
        <a class="fas fa-home" href="home.php" id="home" title="Home"></a>
    </div>
</nav>
<div class="login-container">
    <h1 class="login">Thank you for registering!</h1>
    <h3 class="login">Please login in with your username and password.</h3>
    <div class="container-login-fluid">
        <form class="login-form" action="login.php" method="POST">
            <div class="form-group">
                <label class="login-label" for="username">Username</label><br>
                <input type="text" class="form-control-sm" name="username" id="username" placeholder="username"
                    required>
            </div>
            <div class="form-group">
                <label class="login-label" for="password">Password</label><br>
                <input type="password" class="form-control-sm" name="password" id="password" placeholder="password"
                    required>
                <br>
                <span class="login-password" id="showPassword" onclick="showPassword();">Show Password</span>
            </div>
            <!-- <input class=class="login-label" type="submit" value="Login" title="click to login"> -->
            <button typ="submit" name="login" title="Click to login" class="reg-button">Login</button><br><br>
        </form>
    </div>
</div>
<!-- <?php require 'includes/footer.inc.php'?> -->
<script src="js/script.js"></script>